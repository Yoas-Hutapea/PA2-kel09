<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\User;

class AuthController extends Controller
{
    public function login(Request $request)
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
                ], 400);
            } else {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('password'),
                ], 400);
            }
        }

        $user = User::where('nik', $request->nik)->first();
        if ($user) {
            if (Hash::check($request->password, $user->password)) {
                if (Auth::attempt(['nik' => $request->nik, 'password' => $request->password])) {
                    $token = $user->createToken('authToken')->plainTextToken;
                    return response()->json([
                        'alert' => 'valid',
                        'message' => 'Berhasil Login.',
                        'token' => $token,
                    ], 200);
                }
            } else {
                return response()->json([
                    'alert' => 'error',
                    'message' => 'Maaf, Password Salah.',
                ], 401);
            }
        } else {
            return response()->json([
                'alert' => 'error',
                'message' => 'Maaf, nik Salah atau belum terdaftar.',
            ], 401);
        }
    }

    public function logout(Request $request)
    {
        $request->user()->tokens()->delete();

        return response()->json([
            'message' => 'Logged out successfully.',
        ], 200);
    }
}
