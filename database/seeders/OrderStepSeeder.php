<?php

namespace Database\Seeders;

use App\Models\OrderStep;
use Illuminate\Database\Seeder;

class OrderStepSeeder extends Seeder
{
    public function run(): void
    {
        $steps = [
            ['title' => 'Pilih produk', 'description' => 'Tentukan produk, ukuran, dan rasa yang Anda inginkan dari daftar menu.'],
            ['title' => 'Kirim pesanan via WhatsApp', 'description' => 'Sampaikan produk dan jumlah botol yang ingin dipesan.'],
            ['title' => 'Terima konfirmasi', 'description' => 'Tim Divija akan mengonfirmasi total biaya dan estimasi waktu pesanan siap.'],
        ];

        foreach ($steps as $i => $step) {
            OrderStep::updateOrCreate(['step_number' => $i + 1], $step);
        }
    }
}