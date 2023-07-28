<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Order;
use App\Models\Profil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TransaksiController extends Controller
{
    public function index()
    {
        $profil = Profil::first();
        $tanggal = Carbon::now()->locale('id')->isoFormat('dddd, D MMMM Y');
        $jam = Carbon::now()->locale('id')->isoFormat('HH:mm');

        //Memanggil data transaksi
        $transaksi = Order::with(['pelanggan', 'produk'])
            ->where('status', '=', 'Selesai')
            ->where('status_pembayaran', '=', 'Sudah Dibayar')
            // ->get();
            ->paginate(10);

            // dd($transaksi);

        return view('admin.transaksi.laporan', [
            'title' => 'Transaksi',
            'profil' => $profil,
            'tanggal' => $tanggal,
            'jam' => $jam,
            'transaksi' => $transaksi,
        ]);
    }

    public function cetakPDF($id_order)
    {
        $transaksi = Order::with(['pelanggan', 'produk'])
            ->where('id_order',$id_order)
            ->first();

        return view('admin.transaksi.laporan', [
            'transaksi' => $transaksi,
        ]);
    }
}
