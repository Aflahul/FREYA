<?php

namespace App\Http\Controllers;

use App\Models\Profil;
use Carbon\Carbon;
use App\Models\Produk;
use App\Models\Order;
use Illuminate\Http\Request;
use App\Models\Pelanggan;
use App\Models\User;

// use Illuminate\Support\Facades\DB;
// try {
//     DB::connection()->getPdo();
//     echo "Koneksi database berhasil!";
// } catch (\Exception $e) {
//     die("Koneksi database gagal: " . $e->getMessage());
// }

class DashboardController extends Controller
{
    public function index()
    {
        $order = Order::all();
        $orderModel = new Order();
        // Filter data order berdasarkan status "Sedang Cuci" dan/atau status pembayarannya "Belum Dibayar"
        $proses = $orderModel->where('status', 'Sedang Cuci')
        ->orWhere('status_pembayaran', 'Belum Dibayar')
        ->get();
        $produk = Produk::all();
        $pelanggan = Pelanggan::all();
        $user=User::all();
        $profil = Profil::first();
        $tanggal = Carbon::now()->locale('id')->isoFormat('dddd, D MMMM Y');
        $jam = Carbon::now()->locale('id')->isoFormat('HH:mm');
        return view('admin.dashboard.dashboard', [
            'title' => 'Dashboard',
            'profil' => $profil,
            'order' => $order,
            'user' => $user,
            'proses' => $proses,
            'produk' => $produk,
            'tanggal' => $tanggal,
            'pelanggan' => $pelanggan,
            'jam' => $jam
        ]);
    }

    public function index_pegawai()
    {
        $profil = Profil::first();
        $tanggal = Carbon::now()->locale('id')->isoFormat('dddd, D MMMM Y');
        $jam = Carbon::now()->locale('id')->isoFormat('HH:mm');
        return view('pegawai.dashboard.dashboard_pegawai', [
            'title' => 'Dashboard',
            'profil' => $profil,
            'tanggal' => $tanggal,
            'jam' => $jam
        ]);
    }
    // public function myFunction()
    // {
    //     $tanggal = Carbon::now()->locale('id')->isoFormat('dddd, D MMMM Y HH:mm:ss');
    //     return view('admin.dashboard.dashboard', compact('tanggal'));
    // }
}
