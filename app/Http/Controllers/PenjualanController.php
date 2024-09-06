<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PenjualanController extends Controller {
    public function penjualan() {
        return view('blog.penjualan')
            ->with('penjualan', 'Toko Nurhidayah'); // passing data ke Blade
    }
}

// Tugas Pratikum Nomor 3 View Halaman Penjualan