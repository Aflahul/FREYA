<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Concerns\HasTimestamps;
 
class User extends Authenticatable
{
    use HasFactory, Notifiable,HasTimestamps;

    protected $table = 'tb_user';
    protected $primaryKey = 'id_user';
    protected $fillable = [
        'username',
        'password',
        'confir_password',
        'level',
    ];
    protected $hidden = [
        'password',
    ];
    protected $casts = [
        'last_login' => 'datetime',
    ];
    protected $dates = [
        'last_login', // Tambahkan kolom "last_login" di sini
    ];
}