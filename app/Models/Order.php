<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = 'tb_order';
    protected $fillable = ['kd_order','id_pelanggan','id_layanan','total','status','durasi','qty'];
    protected $primaryKey = 'id_order';
    public $timestamps = false;
}
