<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'banner',
        'date',
        'address',
        'display_alert_from',
        'display_alert_to',
        'rsvp'
    ];
}
