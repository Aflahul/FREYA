<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'tb_order';
    protected $primaryKey = 'id_order';
    public $incrementing = false;
    protected $keyType = 'string';
    public function pelanggan()
    {
        return $this->belongsTo(Pelanggan::class, 'id_pelanggan');
    }

    public function produk()
    {
        return $this->belongsTo(Produk::class, 'id_layanan');
    }

    protected static function boot()
    {
        parent::boot();
        static::created(function ($order) {
            // Mengupdate kolom "total order" di tabel tb_pelanggan
            $order->pelanggan->total_order = $order->pelanggan->orders->count();
            $order->pelanggan->save();
        });
    }
}
