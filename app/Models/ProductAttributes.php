<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProductAttributes extends Model
{
    protected $table = 'product_attributes';

    protected $fillable = [
        'attribute_key',
        'attribute_value'
    ];

    public function products(): BelongsTo {
        return $this->belongsTo(Products::class, 'id', 'product_id');
    }
}
