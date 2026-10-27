<?php

namespace Database\Seeders;

use App\Models\Gallery;
use Illuminate\Database\Seeder;

class GallerySeeder extends Seeder
{
    public function run(): void
    {
        Gallery::create(['title' => 'Menu Dwija', 'image' => 'images/gallery/menu-dwija.jpg']);
        Gallery::create(['title' => 'Soya Milk', 'image' => 'images/products/soya-milk.jpg']);
        Gallery::create(['title' => 'Aluna', 'image' => 'images/products/aluna.jpg']);
        Gallery::create(['title' => 'Jemi', 'image' => 'images/products/jemi.jpg']);
    }
}
