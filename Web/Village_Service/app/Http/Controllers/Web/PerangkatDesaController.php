<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PerangkatDesa;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class PerangkatDesaController extends Controller
{
    public function index(Request $request)
    {
        $perangkat = PerangkatDesa::all();
        return view('web.Perangkat.perangkat', compact('perangkat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('web.Perangkat.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $messages = [
            'jabatan.required' => 'Jabatan harus diisi.',
            'jabatan.regex' => 'Jabatan tidak boleh mengandung simbol.',
            'nama.required' => 'Nama harus diisi.',
            'nama.regex' => 'Nama tidak boleh mengandung angka dan simbol.',
        ];

        $validator = Validator::make($request->all(), [
            'nama' => 'required|string|regex:/^[a-zA-Z\s]+$/u',
            'jabatan' => 'required|string|regex:/^[a-zA-Z\s]+$/u',
        ], $messages);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => $validator->errors()->first(),
            ]);
        }

        return response()->json([
            'status' => 'success',
            'message' => 'Perangkat Desa created successfully.',
        ]);
    }



    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PerangkatDesa  $perangkat
     * @return \Illuminate\Http\Response
     */
    public function show(PerangkatDesa $perangkat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PerangkatDesa  $perangkat
     * @return \Illuminate\Http\Response
     */
    public function edit(PerangkatDesa $perangkat)
    {
        return view('web.Perangkat.update', compact('perangkat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PerangkatDesa  $perangkat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PerangkatDesa $perangkat)
{
    $validator = Validator::make($request->all(), [
        'jabatan' => 'required',
        'nama' => 'required',
    ]);

    if ($validator->fails()) {
        return response()->json([
            'status' => 'error',
            'message' => $validator->errors()->first(),
        ]);
    }

    $perangkat->update($request->all());

    return response()->json([
        'status' => 'success',
        'message' => 'Perangkat updated successfully',
    ]);

    return redirect()->route('perangkat.index');
}
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PerangkatDesa  $perangkat
     * @return \Illuminate\Http\Response
     */
    public function destroy(PerangkatDesa $perangkat)
    {
        $perangkat->delete();
        return response()->json([
            'status' => 'success',
            'message' => 'Perangkat deleted successfully',
        ]);
    }
}
