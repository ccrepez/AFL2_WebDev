<?php

namespace App\Http\Controllers;

use App\Models\Advantage;
use App\Models\Product;

class AboutController extends Controller
{
    public function index()
    {
        $page = config('divija.pages.about');
        $advantages = Advantage::orderBy('sort_order')->get();
        $products = Product::ordered()->get();

        return $this->render('about', compact('page', 'advantages', 'products'));
    }
}
