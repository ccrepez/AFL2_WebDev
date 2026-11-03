<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with(['sizes', 'flavors'])
            ->orderBy('sort_order')
            ->get();

        return view('products.index', [
            'products' => $products,
        ]);
    }

    public function show($slug)
    {
        $product = Product::with(['sizes', 'flavors', 'galleries'])
            ->where('slug', $slug)
            ->firstOrFail();

        $others = Product::with('sizes')
            ->where('id', '!=', $product->id)
            ->orderBy('sort_order')
            ->get();

        return view('products.show', [
            'product' => $product,
            'others' => $others,
        ]);
    }
}
