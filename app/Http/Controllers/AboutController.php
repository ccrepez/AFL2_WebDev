<?php

namespace App\Http\Controllers;

use App\Models\Product;

class AboutController extends Controller
{
    public function index()
    {
        $products = Product::orderBy('sort_order')->get();

        return view('about', [
            'products' => $products,
        ]);
    }
}
