<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Invoice extends Model
{
    protected $fillable=[
      'total',
      'vat',
      'payable',
      'cus_details',
      'tran_id',
      'val_id',
      'delivery_status',
      'payment_status',
      'user_id',
    ];

    public function user():BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
