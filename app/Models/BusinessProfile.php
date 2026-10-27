<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BusinessProfile extends Model
{
    protected $fillable = ['name', 'tagline', 'description', 'owner_name', 'whatsapp', 'whatsapp_link', 'instagram'];
}
