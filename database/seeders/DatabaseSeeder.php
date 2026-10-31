<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            BusinessProfileSeeder::class,
            AdvantageSeeder::class,
            OrderStepSeeder::class,
            ProductSeeder::class,
            ProductSizeSeeder::class,
            ProductFlavorSeeder::class,
            GallerySeeder::class,
        ]);
    }
}