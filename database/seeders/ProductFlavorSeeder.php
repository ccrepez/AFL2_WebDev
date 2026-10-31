<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductFlavorSeeder extends Seeder
{
    public function run(): void
    {
        $soya = Product::where('slug', 'soya-milk')->firstOrFail();

        foreach (['Original', 'Strawberry', 'Chocolate'] as $flavor) {
            $soya->flavors()->create(['name' => $flavor]);
        }
    }
}