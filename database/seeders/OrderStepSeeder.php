<?php

namespace Database\Seeders;

use App\Models\OrderStep;
use Illuminate\Database\Seeder;

class OrderStepSeeder extends Seeder
{
    public function run(): void
    {
        OrderStep::create(['title' => 'Pilih minuman', 'description' => 'Tentukan produk, ukuran, dan rasa dari menu.']);
        OrderStep::create(['title' => 'Kirim pesan WhatsApp', 'description' => 'Sebutkan pesanan dan jumlah botol.']);
        OrderStep::create(['title' => 'Tunggu konfirmasi', 'description' => 'Dwija akan membalas dengan total harga.']);
    }
}
