<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        // id 1
        Product::create([
            'name' => 'Soya Milk',
            'slug' => 'soya-milk',
            'tagline' => 'Sari kacang dele',
            'description' => 'Susu kedelai buatan rumah dalam botol, tersedia rasa original, strawberry, dan chocolate.',
            'image' => 'images/products/soya-milk.jpg',
        ]);

        // id 2
        Product::create([
            'name' => 'Aluna',
            'slug' => 'aluna',
            'tagline' => 'Sari kacang hijau + kacang almond',
            'description' => 'Perpaduan sari kacang hijau dan kacang almond. Tanpa pengawet dan memakai 100% gula asli.',
            'image' => 'images/products/aluna.jpg',
        ]);

        // id 3
        Product::create([
            'name' => 'Jemi',
            'slug' => 'jemi',
            'tagline' => 'Jelly milk',
            'description' => 'Susu dengan potongan jelly di dalamnya, dikemas dalam botol 1 liter.',
            'image' => 'images/products/jemi.jpg',
        ]);
    }
}
