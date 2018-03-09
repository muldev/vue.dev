<?php

namespace App\Muldev\Cms;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use notifiable;

    protected $fillable = [
        'name', 'description', 'completed', 'wip',
    ];

}
