<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    // protected $table = 'blog_posts';
    protected $fillable = [
        'title',
        'author',
        'slug',
        'body'
    ];
}
