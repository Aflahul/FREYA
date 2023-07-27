<?php

namespace App\Observers;

use App\Models\Arus;
use App\Models\Order;
use Illuminate\Support\Facades\Log;


class OrderObserver
{

    public function updated(Order $order)
    {
        
        //coba ketiga
        // Temukan saldo terakhir dari tabel tb_arus berdasarkan urutan waktu atau ID terbesar
        $lastArus = Arus::orderBy('id_arus', 'desc')->first();

        // Hitung saldo baru dengan menambahkan nilai total dari model $order dengan nilai saldo terakhir
        if ($order->status === 'Selesai' && $order->status_pembayaran === 'Sudah Dibayar') {
            Log::info('Kondisi terpenuhi.');

            // Hitung saldo baru dengan menambahkan nilai total dari model $order dengan nilai saldo terakhir
            $saldoBaru = $order->total + $lastArus->saldo;

            // Simpan data ke tabel tb_arus
            Arus::create([
                'kode' => $order->kd_order,
                'arus' => 'Masuk',
                'nama' => 'Order',
                'total' => $order->total,
                'saldo' => $saldoBaru
            ]);
        } else {
            Log::info('Kondisi tidak terpenuhi.');
        }
    }

    /**
     * Handle the Order "created" event.
     */
    public function created(Order $order): void
    {
        //
    }

    /**
     * Handle the Order "updated" event.
     */
    // public function updated(Order $order): void
    // {
    //     //
    // }

    /**
     * Handle the Order "deleted" event.
     */
    public function deleted(Order $order): void
    {
        //
    }

    /**
     * Handle the Order "restored" event.
     */
    public function restored(Order $order): void
    {
        //
    }

    /**
     * Handle the Order "force deleted" event.
     */
    public function forceDeleted(Order $order): void
    {
        //
    }
}
