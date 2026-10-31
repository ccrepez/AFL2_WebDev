<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BusinessProfile extends Model
{
    protected $guarded = [];

    public function whatsappUrl(?string $message = null): string
    {
        $url = 'https://wa.me/' . $this->whatsapp;

        return $message ? $url . '?text=' . rawurlencode($message) : $url;
    }

    public function getInstagramUrlAttribute(): string
    {
        return 'https://instagram.com/' . $this->instagram;
    }
}