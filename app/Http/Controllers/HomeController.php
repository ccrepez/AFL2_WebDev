<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        // Nanti: ambil produk unggulan, keunggulan, dan foto galeri lewat Model
        return view('home');
    }
}
