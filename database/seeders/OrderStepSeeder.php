<?php

namespace Database\Seeders;

use App\Models\OrderStep;
use Illuminate\Database\Seeder;

class OrderStepSeeder extends Seeder
{
    public function run(): void
    {
        $steps = [
            ['title' => 'Pilih minuman', 'description' => 'Tentukan produk, ukuran, dan rasa dari menu.'],
            ['title' => 'Kirim pesan WhatsApp', 'description' => 'Sebutkan pesanan dan jumlah botol yang diinginkan.'],
            ['title' => 'Tunggu konfirmasi', 'description' => 'Divija akan membalas dengan total harga dan waktu pesanan siap.'],
        ];

        foreach ($steps as $i => $step) {
            OrderStep::create($step + ['step_number' => $i + 1]);
        }
    }
}