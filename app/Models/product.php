<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
   public function user(){
        return $this->belongToMany(User::class);
    }
}
