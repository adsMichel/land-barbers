<?php

namespace Modules\Product\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Product\Database\Factories\ProductFactory;

class Product extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'quantidade',
        'valor',
        'status',
        'name',
        'desc',
    ];

    protected static function newFactory()
    {
        //return ProductFactory::new();
    }
}
