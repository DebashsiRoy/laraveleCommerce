<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Brand;

class Product extends Model
{
    public function brand():BelongsTo
    {
        return $this->belongsTo(\App\Models\Brand::class);
    }
    public function category():BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
    protected $fillable=[
        'title',
        'short_des',
        'price',
        'discount',
        'discount_price',
        'image',
        'stock',
        'star',
        'category_id',
        'brand_id',
    ];
}
