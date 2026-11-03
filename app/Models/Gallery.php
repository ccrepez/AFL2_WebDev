<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Gallery extends Model
{
    protected $guarded = [];

    public function scopePoster($query)
    {
        return $query->where('category', 'poster');
    }

    public function scopeShowcase($query)
    {
        return $query->where('category', '!=', 'poster');
    }

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
}