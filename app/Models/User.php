<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'student_id_num',
        'role',
        'possition',
        'access_status',
        'rfid',
        'schoolyear',
        'profile_pic',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
}
