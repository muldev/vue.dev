<?php

namespace App\Muldev\Cms;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';
    protected $fillable = ['title','body'];
}
