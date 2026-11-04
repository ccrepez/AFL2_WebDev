<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = [];

    public function sizes()
    {
        return $this->hasMany(ProductSize::class)->orderBy('volume_ml');
    }

    public function flavors()
    {
        return $this->hasMany(ProductFlavor::class);
    }

    public function galleries()
    {
        return $this->hasMany(Gallery::class);
    }

    public function startingPrice()
    {
        $min = $this->sizes->min('price');

        return 'Rp'.number_format($min, 0, ',', '.');
    }
}
