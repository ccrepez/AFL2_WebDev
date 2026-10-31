<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with(['sizes', 'flavors'])->ordered()->get();

        return view('products.index', compact('products'));
    }

    public function show(Product $product)
    {
        $product->load(['sizes', 'flavors', 'galleries']);

        $others = Product::with('sizes')
            ->where('id', '!=', $product->id)
            ->ordered()
            ->get();

        return view('products.show', compact('product', 'others'));
    }
}