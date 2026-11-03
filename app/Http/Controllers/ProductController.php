<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $page = config('divija.pages.products');
        $products = Product::with(['sizes', 'flavors'])->ordered()->get();

        return $this->render('products.index', compact('page', 'products'));
    }

    public function show(Product $product)
    {
        $page = config('divija.pages.product');
        $product->load(['sizes', 'flavors', 'galleries']);

        $others = Product::with('sizes')
            ->where('id', '!=', $product->id)
            ->ordered()
            ->get();

        $productOrderUrl = $this->whatsappUrl(
            str_replace(':product', $product->name, config('divija.ui.order_message_product'))
        );

        return $this->render('products.show', compact('page', 'product', 'others', 'productOrderUrl'));
    }
}
