<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $products = [
            [
                'name' => 'Soya Milk',
                'slug' => 'soya-milk',
                'tagline' => 'Sari kacang dele',
                'description' => 'Susu kedelai buatan rumah dalam botol. Ada tiga pilihan rasa: original, strawberry, dan chocolate.',
                'image' => 'images/soya-milk-three-sizes-with-soybeans.jpeg',
                'accent' => 'mustard',
                'sort_order' => 1,
            ],
            [
                'name' => 'Aluna',
                'slug' => 'aluna',
                'tagline' => 'Sari kacang hijau + kacang almond',
                'description' => 'Perpaduan sari kacang hijau dan kacang almond. Tanpa pengawet dan memakai 100% gula asli.',
                'image' => 'images/products/aluna.jpg',
                'accent' => 'olive',
                'sort_order' => 2,
            ],
            [
                'name' => 'Jemi',
                'slug' => 'jemi',
                'tagline' => 'Jelly milk',
                'description' => 'Susu dengan potongan jelly di dalamnya, dikemas dalam botol satu liter.',
                'image' => 'images/jelly-milk-three-bottles-ultra-milk.jpeg',
                'accent' => 'cocoa',
                'sort_order' => 3,
            ],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}