<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    protected $casts = [
        'email_verfied_at' => 'datetime',
    ];

    public function posts(){
        return $this->hasMany(Post::class);
    }

    public function roles(){
        return $this->belongToMany(Role::class);
    }

    public function product(){
        return $this->hasMany(product::class);
    }
}
