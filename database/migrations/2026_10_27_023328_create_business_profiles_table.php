<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('business_profiles', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('tagline');
            $table->text('intro');
            $table->text('story');
            $table->string('owner_name');
            $table->string('whatsapp');          
            $table->string('whatsapp_display');  
            $table->string('instagram');
            $table->string('address')->nullable();
            $table->string('opening_hours')->nullable();
            $table->text('maps_embed')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('business_profiles');
    }
};