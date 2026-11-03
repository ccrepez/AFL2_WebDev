<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\ProductSize;
use Illuminate\Database\Seeder;

class ProductSizeSeeder extends Seeder
{
    public function run(): void
    {
        $soya = Product::where('slug', 'soya-milk')->first();
        $aluna = Product::where('slug', 'aluna')->first();
        $jemi = Product::where('slug', 'jemi')->first();

        ProductSize::create(['product_id' => $soya->id, 'label' => 'Small', 'volume_ml' => 250, 'price' => 10000]);
        ProductSize::create(['product_id' => $soya->id, 'label' => 'Medium', 'volume_ml' => 500, 'price' => 18000]);
        ProductSize::create(['product_id' => $soya->id, 'label' => 'Large', 'volume_ml' => 1000, 'price' => 35000]);

        ProductSize::create(['product_id' => $aluna->id, 'label' => 'Small', 'volume_ml' => 250, 'price' => 12000]);
        ProductSize::create(['product_id' => $aluna->id, 'label' => 'Medium', 'volume_ml' => 500, 'price' => 22000]);
        ProductSize::create(['product_id' => $aluna->id, 'label' => 'Large', 'volume_ml' => 1000, 'price' => 44000]);

        ProductSize::create(['product_id' => $jemi->id, 'label' => 'Large', 'volume_ml' => 1000, 'price' => 60000]);
    }
}
