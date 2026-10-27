<?php

namespace App\Http\Controllers;

class ProductController extends Controller
{
    public function index()
    {
        // Nanti: ambil semua produk + ukuran & harga lewat Model
        return view('products.index');
    }

    public function show($slug)
    {
        // Nanti: cari 1 produk berdasarkan slug + ukuran, rasa, foto
        return view('products.show', ['slug' => $slug]);
    }
}
