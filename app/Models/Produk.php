<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;
    protected $table = 'tb_layanan';
    protected $fillable = ['kd_layanan', 'durasi', 'nama_layanan', 'desk', 'satuan', 'harga', 'aktif'];
    protected $primaryKey = 'id_layanan';
    public $timestamps = false;

}
