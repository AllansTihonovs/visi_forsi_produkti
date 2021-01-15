<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Products extends Model
{
    protected $table = 'products';

    protected $fillable = [
        'name',
        'description'
    ];

    public function productAttributes(): HasMany {
       return $this->hasMany(ProductAttributes::class, 'product_id');
    }

    public function getId(): int {
        return $this->id;
    }

    public function getName(): string {
        return $this->name;
    }

    public function getDescription(): string {
        return $this->description;
    }
}
