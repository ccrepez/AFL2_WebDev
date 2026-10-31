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
            'intro' => 'Susu kedelai, sari kacang hijau almond, dan jelly milk yang dibuat sendiri di dapur rumah. Tanpa pengawet, dikemas dalam botol.',
            'story' => "Dwija adalah usaha minuman botol rumahan milik Ai Meli. Setiap botol diolah sendiri dari bahan pilihan, tanpa pengawet, dan memakai gula asli.\n\nPesanan diterima lewat WhatsApp dan Instagram.",
            'owner_name' => 'Ai Meli',
            'whatsapp' => '6289525773195',
            'whatsapp_display' => '0895-2577-3195',
            'instagram' => 'dwija.collection',
            'address' => null,
            'opening_hours' => null,
            'maps_embed' => null,
        ]);
    }
}