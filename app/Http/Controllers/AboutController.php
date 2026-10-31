<?php

namespace App\Http\Controllers;

use App\Models\Advantage;
use App\Models\Product;

class AboutController extends Controller
{
    public function index()
    {
        $advantages = Advantage::orderBy('sort_order')->get();
        $products = Product::ordered()->get();

        return view('about', compact('advantages', 'products'));
    }
}