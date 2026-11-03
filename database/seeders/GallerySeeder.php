<?php

namespace Database\Seeders;

use App\Models\Gallery;
use App\Models\Product;
use Illuminate\Database\Seeder;

class GallerySeeder extends Seeder
{
    public function run(): void
    {
        Gallery::updateOrCreate(
            ['image' => 'images/poster/menu-divija.jpg'],
            ['title' => 'Daftar menu dan harga Divija', 'category' => 'poster', 'product_id' => null, 'focus' => null],
        );

        $photos = [
            'soya-milk' => [
                ['Soya Milk original ukuran 250 ml', 'soya-milk/original-250ml.jpeg'],
                ['Soya Milk original ukuran 500 ml', 'soya-milk/original-500ml.jpeg'],
                ['Soya Milk original ukuran 1000 ml', 'soya-milk/original-1000ml.jpeg'],
                ['Soya Milk tiga ukuran dengan kacang kedelai', 'soya-milk/three-sizes-with-soybeans.jpeg'],
                ['Soya Milk original tiga ukuran', 'soya-milk/three-sizes-original.jpeg'],
                ['Soya Milk strawberry tiga ukuran', 'soya-milk/three-sizes-strawberry.jpeg'],
                ['Soya Milk original dan strawberry', 'soya-milk/original-and-strawberry-pair.jpeg'],
                ['Soya Milk strawberry ukuran 250 ml', 'soya-milk/strawberry-250ml.jpeg'],
                ['Soya Milk strawberry ukuran 250 ml dan 500 ml', 'soya-milk/strawberry-250ml-and-500ml.jpeg'],
                ['Soya Milk strawberry 250 ml dan original 500 ml', 'soya-milk/strawberry-250ml-and-original-500ml.jpeg'],
            ],
            'aluna' => [
                ['Aluna sari kacang hijau dan almond', 'aluna/aluna-bottle.jpeg'],
            ],
            'jemi' => [
                ['Jemi Jelly Milk 1000 ml dengan pembanding ukuran', 'jemi/jemi-1000ml-with-ultra-milk.jpeg', '85% 30%'],
                ['Jemi Jelly Milk tiga botol', 'jemi/jemi-three-bottles-ultra-milk.jpeg'],
                ['Jemi Jelly Milk dalam tas kado Hari Raya', 'jemi/jemi-hari-raya-gift-bag.jpeg', '50% 40%'],
            ],
        ];

        foreach ($photos as $slug => $items) {
            $productId = Product::where('slug', $slug)->value('id');

            foreach ($items as $item) {
                [$title, $image, $focus] = $item + [2 => null];

                Gallery::updateOrCreate(
                    ['image' => 'images/products/' . $image],
                    [
                        'product_id' => $productId,
                        'title' => $title,
                        'category' => 'produk',
                        'focus' => $focus,
                    ],
                );
            }
        }

        Gallery::updateOrCreate(
            ['image' => 'images/products/collection/full-lineup.jpeg'],
            [
                'title' => 'Seluruh varian Jelly Milk dan Soya Milk',
                'category' => 'produk',
                'product_id' => null,
                'focus' => '20% 50%',
            ],
        );
    }
}
