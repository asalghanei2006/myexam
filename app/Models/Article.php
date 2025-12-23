<?php

namespace App\Models;

use App\Models\Article;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = ['id','name','body'];
}
