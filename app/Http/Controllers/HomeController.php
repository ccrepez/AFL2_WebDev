<?php

namespace App\Http\Controllers;

use App\Models\Advantage;
use App\Models\BusinessProfile;
use App\Models\Product;

class HomeController extends Controller
{
    public function index()
    {
        $profile = BusinessProfile::first();
        $products = Product::all();
        $advantages = Advantage::all();

        return view('home', [
            'profile' => $profile,
            'products' => $products,
            'advantages' => $advantages,
        ]);
    }
}
