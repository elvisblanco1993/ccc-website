<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'bg_image',
        'content',
        'btn_label',
        'btn_link',
        'start_at',
        'end_at',
        'is_enabled',
    ];
}
