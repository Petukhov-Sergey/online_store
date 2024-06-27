<?php

namespace Modules\Store\Entities;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'slug', 'price', 'stock'];

    protected static function newFactory()
    {
        return \Modules\Store\database\factories\ProductFactory::new();
    }
}
