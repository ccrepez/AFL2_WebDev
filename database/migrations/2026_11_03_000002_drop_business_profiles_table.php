<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    // Profil usaha kini berupa teks statis di config/divija.php, bukan data database.
    public function up(): void
    {
        Schema::dropIfExists('business_profiles');
    }

    public function down(): void
    {
    }
};
