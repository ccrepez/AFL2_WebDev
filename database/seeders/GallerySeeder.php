<?php

namespace Database\Seeders;

use App\Models\Gallery;
use App\Models\Product;
use Illuminate\Database\Seeder;

class GallerySeeder extends Seeder
{
    public function run(): void
    {
        foreach (Product::all() as $product) {
            Gallery::create([
                'product_id' => $product->id,
                'title' => $product->name,
                'category' => 'produk',
                'image' => $product->image,
            ]);
        }

        Gallery::create([
            'title' => 'Menu minuman Dwija',
            'category' => 'menu',
            'image' => 'images/gallery/menu-dwija.jpg',
        ]);
    }
}