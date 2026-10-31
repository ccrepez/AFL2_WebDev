<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProductSize extends Model
{
    protected $guarded = [];

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }

    // 10000 -> "Rp10.000"
    public function getFormattedPriceAttribute(): string
    {
        return 'Rp' . number_format($this->price, 0, ',', '.');
    }

    // 10000 -> "10K", gaya penulisan di menu Dwija
    public function getShortPriceAttribute(): string
    {
        return ($this->price / 1000) . 'K';
    }
}
