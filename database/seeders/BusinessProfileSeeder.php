<?php

namespace Database\Seeders;

use App\Models\BusinessProfile;
use Illuminate\Database\Seeder;

class BusinessProfileSeeder extends Seeder
{
    public function run(): void
    {
        BusinessProfile::create([
            'name' => 'Dwija',
            'tagline' => 'Homemade for you',
            'description' => 'Dwija adalah usaha minuman botol rumahan milik Ai Meli. Setiap botol diolah sendiri dari bahan pilihan, tanpa pengawet, dan memakai gula asli.',
            'owner_name' => 'Ai Meli',
            'whatsapp' => '0895-2577-3195',
            'whatsapp_link' => 'https://wa.me/6289525773195',
            'instagram' => 'dwija.collection',
        ]);
    }
}
