<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductSize extends Model
{
    protected $guarded = [];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function formattedPrice()
    {
        return 'Rp'.number_format($this->price, 0, ',', '.');
    }

    public function shortPrice()
    {
        return ($this->price / 1000).'K';
    }
}
