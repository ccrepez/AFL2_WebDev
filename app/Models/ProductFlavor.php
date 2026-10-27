<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductFlavor extends Model
{
    protected $fillable = ['product_id', 'name'];

    // rasa ini milik 1 produk
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
