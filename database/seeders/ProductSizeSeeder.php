<?php

namespace Database\Seeders;

use App\Models\ProductSize;
use Illuminate\Database\Seeder;

class ProductSizeSeeder extends Seeder
{
    public function run(): void
    {
        // Soya Milk (product_id 1)
        ProductSize::create(['product_id' => 1, 'size' => 'Small', 'volume' => 250, 'price' => 10000]);
        ProductSize::create(['product_id' => 1, 'size' => 'Medium', 'volume' => 500, 'price' => 18000]);
        ProductSize::create(['product_id' => 1, 'size' => 'Large', 'volume' => 1000, 'price' => 35000]);

        // Aluna (product_id 2)
        ProductSize::create(['product_id' => 2, 'size' => 'Small', 'volume' => 250, 'price' => 12000]);
        ProductSize::create(['product_id' => 2, 'size' => 'Medium', 'volume' => 500, 'price' => 22000]);
        ProductSize::create(['product_id' => 2, 'size' => 'Large', 'volume' => 1000, 'price' => 44000]);

        // Jemi (product_id 3)
        ProductSize::create(['product_id' => 3, 'size' => 'Large', 'volume' => 1000, 'price' => 60000]);
    }
}
