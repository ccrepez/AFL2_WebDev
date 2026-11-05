<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\Product;

class HomeController extends Controller
{
    public function index()
    {
        $products = Product::with(['sizes', 'flavors'])
            ->orderBy('sort_order')
            ->get();

        $galleries = Gallery::where('category', 'produk')
            ->orderBy('id')
            ->take(4)
            ->get();

        return view('home', [
            'products' => $products,
            'galleries' => $galleries,
        ]);
    }
}
