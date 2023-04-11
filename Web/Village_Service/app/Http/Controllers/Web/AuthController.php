<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Spatie\Permission\Contracts\Role;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('do_logout');
    }

    public function index()
    {
        return view('auth.login');
    }

    public function do_login(Request $request)
    {
        $messages = [
            'nik.required' => 'nik harus diisi',
            'nik.min' => 'nik harus 16 angka',
            'nik.max' => 'nik harus 16 angka',
            'password.required' => 'Password harus diisi',
            'password.min' => 'Password minimal 8 karakter',
        ];
        $validator = Validator::make($request->all(), [
            'nik' => 'required|min:16|max:16',
            'password' => 'required|min:8',
        ], $messages);
        if ($validator->fails()) {
            $errors = $validator->errors();
            if ($errors->has('nik')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('nik'),
                ]);
            } else {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('password'),
                ]);
            }
        }

        $user = User::where('nik', $request->nik)->first();
        if ($user) {
            if (Hash::check($request->password, $user->password)) {
                if (Auth::attempt(['nik' => $request->nik, 'password' => $request->password], $request->remember)) {
                    return response()->json([
                        'alert' => 'success',
                        'message' => 'Selamat datang ' . Auth::user()->nama,
                        'callback' => 'reload',
                    ]);
                }
            } else {
                return response()->json([
                    'alert' => 'error',
                    'message' => 'Maaf, Password Salah.',
                ]);
            }
        } else {
            return response()->json([
                'alert' => 'error',
                'message' => 'Maaf, nik Salah atau belum terdaftar.',
            ]);
        }
    }
    public function do_logout()
    {
        Auth::guard('web')->logout();
        return redirect('/');
    }
}
