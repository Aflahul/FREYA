<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    protected $table = 'tb_pelanggan';
    protected $fillable = ['namapel', 'kontak', 'sedang_cuci', 'alamat', 'total_cuci'];
    protected $primaryKey = 'id_pelanggan';
    public $timestamps = false;
}
