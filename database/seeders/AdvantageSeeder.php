<?php

namespace Database\Seeders;

use App\Models\Advantage;
use Illuminate\Database\Seeder;

class AdvantageSeeder extends Seeder
{
    public function run(): void
    {
        $advantages = [
            ['title' => 'Tanpa pengawet', 'description' => 'Dibuat untuk diminum segar, bukan disimpan berbulan-bulan.'],
            ['title' => 'Bahan pilihan', 'description' => 'Kacang dan bahan lain dipilih sendiri sebelum diolah.'],
            ['title' => 'Diolah dengan higienis', 'description' => 'Dimasak dan dibotolkan di dapur rumah yang dijaga kebersihannya.'],
            ['title' => 'Nikmat dan menyegarkan', 'description' => 'Enak diminum dingin kapan saja.'],
        ];

        foreach ($advantages as $i => $advantage) {
            Advantage::create($advantage + ['sort_order' => $i + 1]);
        }
    }
}