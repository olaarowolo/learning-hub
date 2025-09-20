<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BlogPost extends Model
{
    protected $casts = [
        'published_at' => 'datetime',
    ];
}
