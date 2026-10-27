<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductSize extends Model
{
    protected $fillable = ['product_id', 'size', 'volume', 'price'];

    // ukuran ini milik 1 produk
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
