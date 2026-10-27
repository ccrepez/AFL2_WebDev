<?php

namespace App\Http\Controllers;

use App\Models\BusinessProfile;
use App\Models\Product;

class ProductController extends Controller
{
    // Halaman daftar semua produk
    public function index()
    {
        $profile = BusinessProfile::first();
        $products = Product::all();

        return view('products.index', [
            'profile' => $profile,
            'products' => $products,
        ]);
    }

    // Halaman detail 1 produk, dicari berdasarkan slug di URL
    public function show($slug)
    {
        $profile = BusinessProfile::first();
        $product = Product::where('slug', $slug)->first();

        return view('products.show', [
            'profile' => $profile,
            'product' => $product,
        ]);
    }
}
