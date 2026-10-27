<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'slug', 'tagline', 'description', 'image'];

    // 1 produk punya banyak ukuran
    public function sizes()
    {
        return $this->hasMany(ProductSize::class);
    }

    // 1 produk punya banyak rasa
    public function flavors()
    {
        return $this->hasMany(ProductFlavor::class);
    }
}
