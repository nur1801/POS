<!--Tugas Pratikum Nomor 3 Controller Halaman Home-->

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller{
    public function home(){
        return view('blog.home')
        -> with('home', 'Toko Nurhidayah');
    }
}