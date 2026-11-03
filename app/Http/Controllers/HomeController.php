<?php

namespace App\Http\Controllers;

use App\Models\Advantage;
use App\Models\Gallery;
use App\Models\Product;

class HomeController extends Controller
{
    public function index()
    {
        $page = config('divija.pages.home');
        $products = Product::with(['sizes', 'flavors'])->where('is_featured', true)->ordered()->get();
        $advantages = Advantage::orderBy('sort_order')->get();
        $galleries = Gallery::showcase()->orderBy('id')->take(4)->get();

        return $this->render('home', compact('page', 'products', 'advantages', 'galleries'));
    }
}
