<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profil extends Model
{
    use HasFactory;
    protected $table = 'tb_profil';
    protected $fillable = ['nama_laundry', 'tagline', 'desk', 'alamat', 'logo','kontak'];
    protected $primaryKey = 'id_laundry';
   
}
