<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProductReview extends Model
{
    protected $fillable=['description','rating','product_id','customer_id'];

    public function Profile():BelongsTo
    {
        return $this->belongsTo(CustomerProfile::class,'customer_id');
    }
}
