<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class PendudukController extends Controller
{
    public function index(Request $request)
    {
        $penduduk = User::all();
        return view('web.Penduduk.penduduk', compact('penduduk'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('web.Penduduk.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nik' => 'required|unique:users',
            'nama' => 'required',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => $validator->errors()->first(),
            ]);
        }

        $user = new User();
        $user->nik = $request->input('nik');
        $user->nama = $request->input('nama');
        $user->password = Hash::make($request->input('password'));
        $user->save();

        return redirect()->route('penduduk.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $penduduk
     * @return \Illuminate\Http\Response
     */
    public function show(User $penduduk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $penduduk
     * @return \Illuminate\Http\Response
     */
    public function edit(User $penduduk)
    {
        return view('web.Penduduk.update', compact('penduduk'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $penduduk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $penduduk)
{
    $validator = Validator::make($request->all(), [
        'nik' => 'required',
        'nama' => 'required',
        'no_telp' => 'required',
        'tempat_lahir' => 'required',
        'tanggal_lahir' => 'required',
        'usia' => 'required',
        'jenis_kelamin' => 'required',
        'pekerjaan' => 'required',
        'agama' => 'required',
        'kk' => 'required',
        'alamat' => 'required',
    ]);

    if ($validator->fails()) {
        return response()->json([
            'status' => 'error',
            'message' => $validator->errors()->first(),
        ]);
    }

    $penduduk->update($request->all());

    return redirect()->route('penduduk.index');
}
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $penduduk
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $penduduk)
    {
        $penduduk->delete();
        return response()->json([
            'status' => 'success',
            'message' => 'Penduduk deleted successfully',
        ]);
    }
}
