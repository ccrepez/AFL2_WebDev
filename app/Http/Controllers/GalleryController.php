<?php

namespace App\Http\Controllers;

class GalleryController extends Controller
{
    public function index()
    {
        // Nanti: ambil semua foto + daftar kategori lewat Model
        return view('gallery');
    }
}
