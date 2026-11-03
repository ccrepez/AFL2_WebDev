<?php

namespace Database\Seeders;

use App\Models\Advantage;
use Illuminate\Database\Seeder;

class AdvantageSeeder extends Seeder
{
    public function run(): void
    {
        $advantages = [
            ['title' => 'Tanpa pengawet', 'description' => 'Diproduksi untuk dinikmati segar, tanpa bahan pengawet buatan.'],
            ['title' => 'Bahan pilihan', 'description' => 'Kacang dan bahan baku lainnya diseleksi dengan cermat sebelum diolah.'],
            ['title' => 'Proses higienis', 'description' => 'Dimasak dan dikemas di dapur yang selalu dijaga kebersihannya.'],
            ['title' => 'Nikmat dan menyegarkan', 'description' => 'Cita rasa seimbang, paling nikmat disajikan dingin.'],
        ];

        foreach ($advantages as $i => $advantage) {
            Advantage::updateOrCreate(['sort_order' => $i + 1], $advantage);
        }
    }
}