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

        $pdf = PDF::loadView('pdf.penduduk', compact('penduduk'));
        return $pdf->stream();
    }

    public function generatePerangkatPdf()
    {
        $perangkat = Perangkat::all();

        $pdf = PDF::loadView('pdf.perangkat', compact('perangkat'));
        return $pdf->stream();
    }

}
