<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasTimestamps;
 
class User extends Authenticatable
{
    use HasFactory, Notifiable,HasTimestamps;

    /**
     * tabel yang terkoneksi
     *
     * @var string
     */
    protected $table = 'tb_user';

    /**
     * primary key 
     *
     * @var string
     */
    protected $primaryKey = 'id_user';

    /**
     * atribut tabel
     *
     * @var array
     */
    protected $fillable = [
        'username',
        'password',
        'confir_password',
        'level',
    ];

    /**
     * atribut password
     *
     * @var array
     */
    protected $hidden = [
        'password',
    ];

    // /**
    //  * atribut otomatis
    //  *
    //  * @var array
    //  */
    protected $casts = [
        'last_login' => 'datetime',
    ];
    protected $dates = [
        'last_login', // Tambahkan kolom "last_login" di sini
    ];

}
