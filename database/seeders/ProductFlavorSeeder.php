<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\ProductFlavor;
use Illuminate\Database\Seeder;

class ProductFlavorSeeder extends Seeder
{
    public function run(): void
    {
        $soya = Product::where('slug', 'soya-milk')->first();

        ProductFlavor::create(['product_id' => $soya->id, 'name' => 'Original']);
        ProductFlavor::create(['product_id' => $soya->id, 'name' => 'Strawberry']);
        ProductFlavor::create(['product_id' => $soya->id, 'name' => 'Chocolate']);
    }
}
