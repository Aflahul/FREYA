<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    protected $table = 'tb_pelanggan';
    protected $primaryKey = 'id_pelanggan';
    protected $fillable = [
        'namapel',
        'kontak',
        'alamat',
        ];
    public function orders()
    {
        return $this->hasMany(Order::class, 'id_pelanggan');
    }
}
