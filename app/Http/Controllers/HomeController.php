<?php

namespace App\Http\Controllers;

use App\Models\Advantage;
use App\Models\Gallery;
use App\Models\Product;

class HomeController extends Controller
{
    public function index()
    {
        $products = Product::with(['sizes', 'flavors'])->where('is_featured', true)->ordered()->get();
        $advantages = Advantage::orderBy('sort_order')->get();
        $galleries = Gallery::latest()->take(4)->get();

        return view('home', compact('products', 'advantages', 'galleries'));
    }
}