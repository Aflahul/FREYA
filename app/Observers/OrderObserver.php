<?php

namespace App\Observers;

use App\Models\Order;
use App\Models\Arus;


class OrderObserver
{

    public function updated(Order $order)
    {
        if ($order->status_cuci === 'Selesai' && $order->status_pembayaran === 'Sudah Dibayar') {
            Arus::create([
                'kode' => $order->kd_order,
                'arus' => 'Masuk',
                'total' => $order->total,
                'saldo' => 0
            ]);
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
