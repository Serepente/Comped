<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    use HasFactory;

    protected $table = 'events';

    protected $fillable = [
        'event_code',
        'event_title',
        'event_date',
        'event_description',
        'event_banner',
        'time_in_open_am',
        'time_in_close_am',
        'time_out_open_am',
        'time_out_close_am',
        'time_in_open_pm',
        'time_in_close_pm',
        'time_out_open_pm',
        'time_out_close_pm',
    ];
}
