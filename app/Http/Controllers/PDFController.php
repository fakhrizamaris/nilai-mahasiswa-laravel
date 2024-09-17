<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
// use Barryvdh\DomPDF\PDF;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class PDFController extends Controller
{
    public function generatePDF()
    {
    // Ambil data dari model atau database
    $mahasiswas = Mahasiswa::all();

    // Memuat view yang akan diubah menjadi PDF
    $pdf = PDF::loadView('cetak_pdf.index', compact('mahasiswas'));

    // Menghasilkan file PDF untuk diunduh
    return $pdf->download('tabel-data.pdf');
    }
}
