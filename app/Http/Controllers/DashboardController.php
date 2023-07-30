<?php

namespace App\Http\Controllers;

use App\Models\Profil;
use Carbon\Carbon;
use App\Models\Produk;
use App\Models\Order;
use Illuminate\Http\Request;
use App\Models\Pelanggan;
use App\Models\User;
use App\Models\Arus;

use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $role = Auth::user()->level; // Mendapatkan peran (level) dari pengguna yang login
        $produk = Produk::all();
        $pelanggan = Pelanggan::all();
        $user = User::all();
        $profil = Profil::first();
        $tanggal = Carbon::now()->locale('id')->isoFormat('dddd, D MMMM Y');
        $jam = Carbon::now()->locale('id')->isoFormat('HH:mm');

        // Ambil 5 data arus terbaru
        $arus = Arus::orderBy('id_arus', 'desc')->first('saldo');
        $aruss = Arus::orderBy('id_arus', 'desc')->limit(3)->get();

        // Ambil 5 data order terbaru
        $order = Order::latest()->limit(3)->get();
        $orderModel = new Order();

        // Filter data order berdasarkan status "Sedang Cuci" dan/atau status pembayarannya "Belum Dibayar"
        $proses = $orderModel->where('status', 'Sedang Cuci')
            ->orWhere('status_pembayaran', 'Belum Dibayar')
            ->get();

        // Proses estimasi tanggal selesai berdasarkan created_at dan durasi produk.
        foreach ($order as $item) {
            $estimasiSelesai = Carbon::parse($item->created_at)
                ->addDays($item->produk->durasi);

            // Tambahkan estimasi tanggal selesai ke dalam variabel $item (data order saat ini)
            $item->estimasi_selesai = $estimasiSelesai;
        }

        $view = 'admin.dashboard.dashboard';
        // Tetap menggunakan view dashboard.blade.php yang berisi konten yang sama

        // Siapkan data untuk dikirimkan ke tampilan (view)
        return view($view, [
            'title' => 'Dashboard',
            'profil' => $profil,
            'order' => $order,
            'user' => $user,
            'proses' => $proses,
            'produk' => $produk,
            'arus' => $arus,
            'aruss' => $aruss,
            'tanggal' => $tanggal,
            'pelanggan' => $pelanggan,
            'jam' => $jam,
        ]);
    }
}
