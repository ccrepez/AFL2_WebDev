<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    protected $guarded = [];

    protected $casts = [
        'is_featured' => 'boolean',
    ];

    public function sizes(): HasMany
    {
        return $this->hasMany(ProductSize::class)->orderBy('volume_ml');
    }

    public function flavors(): HasMany
    {
        return $this->hasMany(ProductFlavor::class);
    }

    public function galleries(): HasMany
    {
        return $this->hasMany(Gallery::class);
    }

    public function getStartingPriceAttribute(): ?string
    {
        $min = $this->sizes->min('price');

        return $min ? 'Rp' . number_format($min, 0, ',', '.') : null;
    }

    public function scopeOrdered($query)
    {
        return $query->orderBy('sort_order');
    }
}