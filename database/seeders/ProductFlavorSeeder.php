<?php

namespace Database\Seeders;

use App\Models\ProductFlavor;
use Illuminate\Database\Seeder;

class ProductFlavorSeeder extends Seeder
{
    public function run(): void
    {
        // Soya Milk (product_id 1)
        ProductFlavor::create(['product_id' => 1, 'name' => 'Original']);
        ProductFlavor::create(['product_id' => 1, 'name' => 'Strawberry']);
        ProductFlavor::create(['product_id' => 1, 'name' => 'Chocolate']);
    }
}
