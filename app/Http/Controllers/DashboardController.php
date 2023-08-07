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
        // Mengambil data user yang sedang login dan perannya (level)
        $role = Auth::user()->level;

        // Mengambil data dari berbagai model
        $produk = Produk::all();
        $pelanggan = Pelanggan::all();
        $user = User::all();
        $profil = Profil::first();

        // Mengambil data tanggal dan jam saat ini dengan format yang diinginkan
        $tanggal = Carbon::now()->locale('id')->isoFormat('dddd, D MMMM Y');
        $jam = Carbon::now()->locale('id')->isoFormat('HH:mm');

        // Mengambil 5 data arus terbaru
        $arus = Arus::orderBy('id_arus', 'desc')->first('saldo');
        $aruss = Arus::orderBy('id_arus', 'desc')->limit(3)->get();

        // Mengambil 5 data order terbaru
        // $order = Order::latest()->limit(3)->get();
        // $orderModel = new Order();

        // Filter data order berdasarkan status "Sedang Cuci" dan/atau status pembayarannya "Belum Dibayar"
        $proses = Order::with(['pelanggan', 'produk'])
            ->where('status', '!=', 'Selesai Cuci')
            ->where('status_pembayaran', '!=', 'Sudah Bayar')
            ->orderBy('created_at', 'desc')
            ->get();


        // Proses estimasi tanggal selesai berdasarkan created_at dan durasi produk.
        foreach ($proses as $item) {
            $estimasiSelesai = Carbon::parse($item->created_at)->addDays($item->produk->durasi);
            // Tambahkan estimasi tanggal selesai ke dalam variabel $item (data order saat ini)
            $item->estimasi_selesai = $estimasiSelesai;
        }
        // dd($proses);
        $view = 'admin.dashboard.dashboard';
        // Tetap menggunakan view dashboard.blade.php yang berisi konten yang sama

        // Siapkan data untuk di$ddkirimkan ke tampilan (view)
        return view($view, [
            'title' => 'Dashboard',
            'profil' => $profil,
            // 'order' => $order,
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
