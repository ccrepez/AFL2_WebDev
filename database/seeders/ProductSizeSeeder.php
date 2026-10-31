<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSizeSeeder extends Seeder
{
    public function run(): void
    {
        $sizes = [
            'soya-milk' => [
                ['label' => 'Small', 'volume_ml' => 250, 'price' => 10000],
                ['label' => 'Medium', 'volume_ml' => 500, 'price' => 18000],
                ['label' => 'Large', 'volume_ml' => 1000, 'price' => 35000],
            ],
            'aluna' => [
                ['label' => 'Small', 'volume_ml' => 250, 'price' => 12000],
                ['label' => 'Medium', 'volume_ml' => 500, 'price' => 22000],
                ['label' => 'Large', 'volume_ml' => 1000, 'price' => 44000],
            ],
            'jemi' => [
                ['label' => 'Large', 'volume_ml' => 1000, 'price' => 60000],
            ],
        ];

        foreach ($sizes as $slug => $rows) {
            $product = Product::where('slug', $slug)->firstOrFail();

            foreach ($rows as $row) {
                $product->sizes()->create($row);
            }
        }
    }
}