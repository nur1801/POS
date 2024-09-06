<!-- Tugas Pratikum Nomor 3 Controller Halaman User -->

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller { 
    public function user($id, $nama) { 
        return view('blog.user')
        ->with('id', $id)
        ->with('nama', $nama);
    }
}