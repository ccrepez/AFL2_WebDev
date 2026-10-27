<?php

namespace Database\Seeders;

use App\Models\Advantage;
use Illuminate\Database\Seeder;

class AdvantageSeeder extends Seeder
{
    public function run(): void
    {
        Advantage::create(['title' => 'Tanpa pengawet', 'description' => 'Dibuat untuk diminum segar.']);
        Advantage::create(['title' => 'Bahan pilihan berkualitas', 'description' => 'Bahan dipilih sendiri sebelum diolah.']);
        Advantage::create(['title' => 'Diolah dengan cinta dan higienis', 'description' => 'Dibuat di dapur rumah yang dijaga kebersihannya.']);
        Advantage::create(['title' => 'Nikmat, sehat, dan menyegarkan', 'description' => 'Enak diminum dingin kapan saja.']);
    }
}
