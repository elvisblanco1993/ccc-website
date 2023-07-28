<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'title',
        'slug',
        'body',
        'excerpt',
        'banner',
        'published_at',
        'comments',
    ];
}
