<?php

namespace Database\Seeders;

use App\Models\Gallery;
use App\Models\Product;
use Illuminate\Database\Seeder;

class GallerySeeder extends Seeder
{
    public function run(): void
    {
        $photos = [
            ['Jelly Milk dengan tas kado Hari Raya', 'produk', 'images/jelly-milk-hari-raya-gift-bag.jpeg', 'jemi'],
            ['Jelly Milk tiga botol', 'produk', 'images/jelly-milk-three-bottles-ultra-milk.jpeg', 'jemi'],
            ['Jelly Milk dan Soya Milk', 'produk', 'images/jelly-and-soya-milk-full-lineup.jpeg', null],
            ['Soya Milk tiga ukuran dengan kacang kedelai', 'produk', 'images/soya-milk-three-sizes-with-soybeans.jpeg', 'soya-milk'],
            ['Soya Milk original tiga ukuran', 'produk', 'images/soya-milk-three-sizes-original.jpeg', 'soya-milk'],
            ['Soya Milk strawberry tiga ukuran', 'produk', 'images/soya-milk-three-sizes-strawberry.jpeg', 'soya-milk'],
            ['Soya Milk original dan strawberry', 'produk', 'images/soya-milk-original-and-strawberry-pair.jpeg', 'soya-milk'],
            ['Soya Milk strawberry botol kecil', 'produk', 'images/soya-milk-strawberry-small-bottle.jpeg', 'soya-milk'],
            ['Soya Milk strawberry botol kecil dan besar', 'produk', 'images/soya-milk-strawberry-small-and-large.jpeg', 'soya-milk'],
            ['Soya Milk strawberry dan original', 'produk', 'images/soya-milk-strawberry-and-original.jpeg', 'soya-milk'],
        ];

        foreach ($photos as [$title, $category, $image, $slug]) {
            Gallery::create([
                'product_id' => $slug ? Product::where('slug', $slug)->value('id') : null,
                'title' => $title,
                'category' => $category,
                'image' => $image,
            ]);
        }

        Gallery::create([
            'title' => 'Menu minuman Divija',
            'category' => 'menu',
            'image' => 'images/gallery/menu-divija.jpg',
        ]);
    }
}
