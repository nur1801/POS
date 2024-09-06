<!-- Tugas Pratikum Nomor 3 Controller Halaman Product -->

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller {
    public function fnb() {
        return view('blog.foodbaverage') 
        -> with('category', 'Food and Baverage');
    }
    public function bh() {
        return view('blog.beautyhealth')
        -> with('category', 'Beauty and Health');
    }
    public function homecare() {
        return view('blog.homecare')
        -> with('category', 'Homer and Care');
    }
    public function babykid() {
        return view('blog.babykid')
        -> with('category', 'Baby and Kid');
    }
}