<?php

namespace App\Observers;

use App\Models\Arus;
use App\Models\Order;
use App\Models\Produk;
use Illuminate\Support\Facades\Log;


class OrderObserver
{

    // public function updated(Order $order)
    // {

    //     //coba ketiga
    //     // Temukan saldo terakhir dari tabel tb_arus berdasarkan urutan waktu atau ID terbesar
    //     $lastArus = Arus::orderBy('id_arus', 'desc')->first();

    //     // Hitung saldo baru dengan menambahkan nilai total dari model $order dengan nilai saldo terakhir
    //     if ($order->status === 'Selesai Dicuci' && $order->status_pembayaran === 'Sudah Bayar') {
    //         Log::info('Kondisi terpenuhi.');

    //         // Hitung saldo baru dengan menambahkan nilai total dari model $order dengan nilai saldo terakhir
    //         if (isset($lastArus)) {
    //             $saldoBaru = $order->total + $lastArus->saldo;
    //         } else {
    //             // Jika tidak ada $lastArus, langsung masukkan total sebagai saldo baru
    //             $saldoBaru = $order->total;
    //         }

    //         // Simpan data ke tabel tb_arus
    //         Arus::create([
    //             'kode' => $order->kd_order,
    //             'arus' => $order->produk->nama_layanan,
    //             'nama' => 'Order',
    //             'total' => $order->total,
    //             'tgl' => $order->updated_at,
    //             'saldo' => $saldoBaru
    //         ]);
    //     } else {
    //         Log::info('Kondisi tidak terpenuhi.');
    //     }
    // }

   
    public function updated(Order $order)
    {
        // Temukan saldo terakhir dari tabel tb_arus berdasarkan urutan waktu atau ID terbesar
        $lastArus = Arus::orderBy('id_arus', 'desc')->first();

        // Cek apakah status Selesai Dicuci dan status pembayaran Sudah Bayar
        if ($order->status === 'Selesai Dicuci' && $order->status_pembayaran === 'Sudah Bayar') {
            Log::info('Kondisi terpenuhi.');

            // Hitung saldo baru dengan menambahkan nilai total dari model $order dengan nilai saldo terakhir
            if (isset($lastArus)) {
                $saldoBaru = $order->total + $lastArus->saldo;
            } else {
                // Jika tidak ada $lastArus, langsung masukkan total sebagai saldo baru
                $saldoBaru = $order->total;
            }

            // Simpan data ke tabel tb_arus
            Arus::create([
                'kode' => $order->kd_order,
                'nama' => $order->produk->nama_layanan,
                'arus' => 'Masuk',
                'total' => $order->total,
                'tgl' => $order->updated_at,
                'saldo' => $saldoBaru
            ]);

            // Cari produk berdasarkan id_layanan di model Order
            $produk = Produk::where('id_layanan', $order->id_layanan)->first();

            if ($produk) {
                // Tambahkan nilai qty ke total_order di model Produk
                $produk->total_order += $order->qty;
                
                $produk->save();
            }
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
