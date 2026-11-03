<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        Product::create([
            'name' => 'Soya Milk',
            'slug' => 'soya-milk',
            'tagline' => 'Susu kedelai pilihan',
            'description' => 'Susu kedelai olahan sendiri dalam kemasan botol. Tersedia dalam tiga pilihan rasa: original, strawberry, dan chocolate.',
            'image' => 'images/products/soya-milk/three-sizes-with-soybeans.jpeg',
            'accent' => 'mustard',
            'sort_order' => 1,
        ]);

        Product::create([
            'name' => 'Aluna',
            'slug' => 'aluna',
            'tagline' => 'Sari kacang hijau + kacang almond',
            'description' => 'Perpaduan sari kacang hijau dan kacang almond yang bergizi. Tanpa pengawet dan menggunakan 100% gula asli.',
            'image' => 'images/products/aluna/aluna-bottle.jpeg',
            'accent' => 'olive',
            'sort_order' => 2,
        ]);

        Product::create([
            'name' => 'Jemi',
            'slug' => 'jemi',
            'tagline' => 'Jelly milk',
            'description' => 'Susu segar dengan potongan jelly lembut, dikemas dalam botol satu liter.',
            'image' => 'images/products/jemi/jemi-three-bottles-ultra-milk.jpeg',
            'accent' => 'cocoa',
            'sort_order' => 3,
        ]);
    }
}
