<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\kegiatan;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class KegiatanController extends Controller
{
    public function index(Request $request)
    {
        $kegiatan = Kegiatan::all();
        return view('web.Kegiatan.kegiatan', compact('kegiatan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('web.Kegiatan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::Make($request->all(), [
            'judul' => 'required',
            'tempat' => 'required',
            'tanggal' => 'required',
            'deskripsi' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => $validator->errors()->first(),
            ]);
        }

        Kegiatan::create($request->all());

        // return response()->json([
        //     'status' => 'success',
        //     'message' => 'Kegiatan created successfully',
        // ]);
        return redirect()->route('kegiatan.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kegiatan  $kegiatan
     * @return \Illuminate\Http\Response
     */
    public function show(Kegiatan $kegiatan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kegiatan  $kegiatan
     * @return \Illuminate\Http\Response
     */
    public function edit(Kegiatan $kegiatan)
    {
        return view('web.Kegiatan.update', compact('kegiatan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kegiatan  $kegiatan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kegiatan $kegiatan)
{
    $validator = Validator::make($request->all(), [
        'judul' => 'required',
        'tempat' => 'required',
        'tanggal' => 'required',
        'deskripsi' => 'required'
    ]);

    if ($validator->fails()) {
        return response()->json([
            'status' => 'error',
            'message' => $validator->errors()->first(),
        ]);
    }

    $kegiatan->update($request->all());

    return response()->json([
        'status' => 'success',
        'message' => 'Kegiatan updated successfully',
    ]);

    return redirect()->route('kegiatan.index');
}
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kegiatan  $kegiatan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kegiatan $kegiatan)
    {
        $kegiatan->delete();
        return response()->json([
            'status' => 'success',
            'message' => 'Kegiatan deleted successfully',
        ]);
    }
}
