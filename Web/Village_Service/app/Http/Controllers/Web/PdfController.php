<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PDF;
use App\Models\User;
use App\Models\PerangkatDesa;

class PdfController extends Controller
{
    public function generateUserPdf()
    {
        $user = User::all();

        $data = [
            'users' => $user
        ];

        view()->share('penduduk', $data);

        $pdf = PDF::loadView('daftar_penduduk', $data);

        return $pdf->download('daftar_penduduk.pdf');
    }

    public function generatePerangkatPdf()
    {
        $perangkat = Perangkat::all();

        $data = [
            'perangkat' => $perangkat
        ];

        view()->share('perangkat', $data);

        $pdf = PDF::loadView('daftar_perangkat', $data);

        return $pdf->download('daftar_perangkat.pdf');
    }

}
