<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Str;
use App\Models\Artikel;
use App\Models\Profil;
use App\Models\Order;

use Illuminate\Support\Facades\Session;
use App\Models\Produk;

class LandingController extends Controller

{
    
    public function index($status = null)
    {
        // Mengambil pesan error dari session flash data (jika ada)
        $error = Session::get('error');

        $artikel = Artikel::all();
        $produk = Produk::paginate(5);
        $profil = Profil::first();
        $tanggal = Carbon::now()->locale('id')->isoFormat('dddd, D MMMM Y');
        $jam = Carbon::now()->locale('id')->isoFormat('HH:mm');

        return view('landing.home', [
            'title' => 'Home',
            'artikel' => $artikel,
            'produk' => $produk,
            'profil' => $profil,
            'tanggal' => $tanggal,
            'jam' => $jam,
            'status' => $status, // Kirimkan data status ke view
            'error' => $error, // Kirimkan data pesan error ke view
        ]);
    }


    public function searchInvoice(Request $request)
    {
        $invoiceNumber = $request->input('invoice_number');

        // Ambil data order berdasarkan kode invoice
        $order = Order::where('kd_order', $invoiceNumber)->first();

        if ($order) {
            $status = [
                'status' => $order->status,
                'status_pembayaran' => $order->status_pembayaran, // Kirimkan data status_pembayaran
            ];
            // Panggil kembali fungsi index dengan data status yang ditemukan
            return $this->index($status);
        } else {
            // Tambahkan pesan error ke dalam session flash data
            Session::flash('error', 'Kode invoice tidak ditemukan atau salah');

            // Panggil kembali fungsi index tanpa menyertakan data status
            return $this->index();
        }
    }

    
}
