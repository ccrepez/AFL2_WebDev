<?php

namespace Database\Seeders;

use App\Models\Gallery;
use App\Models\Product;
use Illuminate\Database\Seeder;

class GallerySeeder extends Seeder
{
    public function run(): void
    {
        $soya = Product::where('slug', 'soya-milk')->first();
        $aluna = Product::where('slug', 'aluna')->first();
        $jemi = Product::where('slug', 'jemi')->first();

        Gallery::create([
            'product_id' => null,
            'title' => 'Daftar menu dan harga Divija',
            'category' => 'poster',
            'image' => 'images/poster/menu-divija.jpg',
        ]);

        Gallery::create(['product_id' => $soya->id, 'title' => 'Soya Milk original ukuran 250 ml', 'category' => 'produk', 'image' => 'images/products/soya-milk/original-250ml.jpeg']);
        Gallery::create(['product_id' => $soya->id, 'title' => 'Soya Milk original ukuran 500 ml', 'category' => 'produk', 'image' => 'images/products/soya-milk/original-500ml.jpeg']);
        Gallery::create(['product_id' => $soya->id, 'title' => 'Soya Milk original ukuran 1000 ml', 'category' => 'produk', 'image' => 'images/products/soya-milk/original-1000ml.jpeg']);
        Gallery::create(['product_id' => $soya->id, 'title' => 'Soya Milk tiga ukuran dengan kacang kedelai', 'category' => 'produk', 'image' => 'images/products/soya-milk/three-sizes-with-soybeans.jpeg']);
        Gallery::create(['product_id' => $soya->id, 'title' => 'Soya Milk original tiga ukuran', 'category' => 'produk', 'image' => 'images/products/soya-milk/three-sizes-original.jpeg']);
        Gallery::create(['product_id' => $soya->id, 'title' => 'Soya Milk strawberry tiga ukuran', 'category' => 'produk', 'image' => 'images/products/soya-milk/three-sizes-strawberry.jpeg']);
        Gallery::create(['product_id' => $soya->id, 'title' => 'Soya Milk original dan strawberry', 'category' => 'produk', 'image' => 'images/products/soya-milk/original-and-strawberry-pair.jpeg']);
        Gallery::create(['product_id' => $soya->id, 'title' => 'Soya Milk strawberry ukuran 250 ml', 'category' => 'produk', 'image' => 'images/products/soya-milk/strawberry-250ml.jpeg']);
        Gallery::create(['product_id' => $soya->id, 'title' => 'Soya Milk strawberry ukuran 250 ml dan 500 ml', 'category' => 'produk', 'image' => 'images/products/soya-milk/strawberry-250ml-and-500ml.jpeg']);
        Gallery::create(['product_id' => $soya->id, 'title' => 'Soya Milk strawberry 250 ml dan original 500 ml', 'category' => 'produk', 'image' => 'images/products/soya-milk/strawberry-250ml-and-original-500ml.jpeg']);

        Gallery::create(['product_id' => $aluna->id, 'title' => 'Aluna sari kacang hijau dan almond', 'category' => 'produk', 'image' => 'images/products/aluna/aluna-bottle.jpeg']);

        Gallery::create(['product_id' => $jemi->id, 'title' => 'Jemi Jelly Milk 1000 ml dengan pembanding ukuran', 'category' => 'produk', 'image' => 'images/products/jemi/jemi-1000ml-with-ultra-milk.jpeg']);
        Gallery::create(['product_id' => $jemi->id, 'title' => 'Jemi Jelly Milk tiga botol', 'category' => 'produk', 'image' => 'images/products/jemi/jemi-three-bottles-ultra-milk.jpeg']);
        Gallery::create(['product_id' => $jemi->id, 'title' => 'Jemi Jelly Milk dalam tas kado Hari Raya', 'category' => 'produk', 'image' => 'images/products/jemi/jemi-hari-raya-gift-bag.jpeg']);

        Gallery::create([
            'product_id' => null,
            'title' => 'Seluruh varian Jelly Milk dan Soya Milk',
            'category' => 'produk',
            'image' => 'images/products/collection/full-lineup.jpeg',
        ]);
    }
}
