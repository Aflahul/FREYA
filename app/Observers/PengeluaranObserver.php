<?php

namespace App\Observers;

use App\Models\Pengeluaran;
use App\Models\Arus;

class PengeluaranObserver
{

    public function created(Pengeluaran $pengeluaran)
    {
        // Temukan saldo terakhir dari tabel tb_arus berdasarkan urutan waktu atau ID terbesar
        $lastArus = Arus::orderBy('id_arus', 'desc')->first();

        // Hitung saldo baru dengan menambahkan nilai total dari model $order dengan nilai saldo terakhir
        $saldoBaru = $lastArus->saldo - $pengeluaran->jumlah;

        Arus::create([
            'kode' => $pengeluaran->kd_pengeluaran,
            'nama' => $pengeluaran->pengeluaran,
            'arus' => 'Keluar',
            'total' => $pengeluaran->jumlah,
            'tgl' => $pengeluaran->created_at,
            'saldo' => $saldoBaru
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
