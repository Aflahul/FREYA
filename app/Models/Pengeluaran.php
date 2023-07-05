<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Pengeluaran extends Model
{
    use HasFactory;
    protected $table = 'tb_pengeluaran';
    protected $fillable = ['kd_pengeluaran', 'pengeluaran', 'desk', 'jumlah', 'operator', 'waktu'];
    protected $primaryKey = 'id_pengeluaran';
    public $timestamps = false;
}
