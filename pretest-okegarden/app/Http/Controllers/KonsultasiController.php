<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KonsultasiController extends Controller
{
    public function index()
    {
        return view('konsultasi', [
            'alamat' => 'Jl. serangkai 1 Perum. Bumi Jaya blok A No. 12 Kelurahan samping, 
            Kecamatan Baru, Kota Tanjungpinang, Kepulauan Riau 29125, Indonesia'
            ]
        );
    }
}
