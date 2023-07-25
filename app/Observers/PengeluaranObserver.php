<?php

namespace App\Observers;

use App\Models\Pengeluaran;
use App\Models\Arus;

class PengeluaranObserver
{

    public function created(Pengeluaran $pengeluaran)
    {
        Arus::create([
            'kode' => $pengeluaran->kd_pengeluaran,
            'nama' => $pengeluaran->pengeluaran,
            'arus' => 'Keluar',
            'total' => $pengeluaran->jumlah,
            'saldo' => 0
        ]);
    }

    /**
     * Handle the Pengeluaran "created" event.
     */
    // public function created(Pengeluaran $pengeluaran): void
    // {
    //     //
    // }

    /**
     * Handle the Pengeluaran "updated" event.
     */
    public function updated(Pengeluaran $pengeluaran): void
    {
        //
    }

    /**
     * Handle the Pengeluaran "deleted" event.
     */
    public function deleted(Pengeluaran $pengeluaran): void
    {
        //
    }

    /**
     * Handle the Pengeluaran "restored" event.
     */
    public function restored(Pengeluaran $pengeluaran): void
    {
        //
    }

    /**
     * Handle the Pengeluaran "force deleted" event.
     */
    public function forceDeleted(Pengeluaran $pengeluaran): void
    {
        //
    }
}
