<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Symfony\Component\HttpKernel\Profiler\Profile;

class User extends Model
{
    protected $fillable = ['email','otp'];

    public function profile(): HasOne
    {
        return $this->hasOne(CustomerProfile::class);
    }
}


