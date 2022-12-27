<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $fillable = [
        'is_top_level',
        'parent_id',
        'is_dropdown',
        'btn_label',
        'btn_link',
    ];

    public function children()
    {
        return Menu::where('parent_id', $this->id)->get();
    }
}
