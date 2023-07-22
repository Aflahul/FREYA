<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Order;
use App\Models\Produk;
use App\Models\Profil;
use App\Models\Pelanggan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function index()

    {
        $datapel = Pelanggan::all();
        $data_layanan = Produk::all();

        // $order = Order::with(['pelanggan', 'produk'])->paginate(10);
        // $order = Order::with(['pelanggan', 'produk'])
        // ->where('status', '!=', 'Selesai')
        // ->where('status_pembayaran', '!=', 'Sudah Dibayar')
        // ->paginate(10);

        $order = Order::with(['pelanggan', 'produk'])
            ->where(function ($query) {
                $query->where('status', '!=', 'Selesai')
            ->orWhere('status_pembayaran', '!=', 'Sudah Dibayar');
        })
        ->get();

        // dd($order);

        $tanggal = Carbon::now()->locale('id')->isoFormat('dddd, D MMMM Y');
        $jam = Carbon::now()->locale('id')->isoFormat('HH:mm');
        $profil = Profil::first();

        // dd($order);
        return view('admin.order.order', [
            'title' => 'Order',
            'data' => $order,
            'datapel' => $datapel,
            'profil' => $profil,
            'tanggal' => $tanggal,
            'jam' => $jam,
            'data_layanan' => $data_layanan
        ]);
    }

    public function store(Request $request)
    {
        // Validasi data
        $request->validate([
            'id_pelanggan' => 'required',
            'id_layanan' => 'required',
            'qty' => 'required|integer|min:1',
        ]);

        //Generate kode order
        $lastCode = Order::max('kd_order');
        // dd($lastCode);
        $nextCode = 'INV0001'; // Kode awal
        if ($lastCode) {
            $numericPart = (int) substr($lastCode, 3); // Ambil bagian angka dari kode terakhir
            $nextNumericPart = $numericPart + 1;
            $nextCode = 'INV' . str_pad($nextNumericPart, 4, '0', STR_PAD_LEFT); // Format ulang kode dengan tambahan angka
        }


        // Cari data layanan
        $layanan = Produk::find($request->id_layanan);

        // Pastikan layanan ditemukan
        if ($layanan) {
            // Menghitung total harga
            $harga = $layanan->harga;
            $durasi = $layanan->durasi;
            $qty = $request->qty;
            $total = $harga * $qty;

            

            // Periksa status pembayaran
            $statusPembayaran = $request->has('status_pembayaran') ? 'Sudah Dibayar' : 'Belum Dibayar';

            // Membuat order baru
            $order = new Order;
            $order->kd_order = $nextCode;
            $order->durasi = $durasi;
            $order->id_pelanggan = $request->id_pelanggan;
            $order->id_layanan = $request->id_layanan;
            $order->qty = $qty;
            $order->total = $total;
            $order->status = 'Sedang Cuci';
            $order->status_pembayaran = $statusPembayaran;
            $order->save();

            // Mengupdate nilai kolom "sedang_cuci" di tabel tb_pelanggan
            $pelanggan = Pelanggan::find($request->id_pelanggan);
            $pelanggan->sedang_cuci = 'sedang cuci';
            $pelanggan->save();

            // Mengupdate nilai kolom "total_order" di tabel tb_pelanggan
            $total_order = Order::where('id_pelanggan', $request->id_pelanggan)->count();
            $pelanggan->total_order = $total_order;
            $pelanggan->save();

            // Update kolom "total_order" di tabel "tb_layanan"
            $layanan->total_order += 1;
            $layanan->save();

            return redirect('/order')->with('success', 'Data order berhasil ditambahkan.');
        } else {
            // Lakukan tindakan jika produk tidak ditemukan
            return redirect()->back()->withErrors(['id_layanan' => 'Produk tidak ditemukan.']);
        }
    }

    public function selesai($id_order){

        // SAAT NI TIDAK DIGUNAKAN
        $pelanggan = Order::where('id_order', $id_order)->first();
        // dd($pelanggan);
        $pelanggan->status = 'Selesai';
        $pelanggan->save();

        return redirect('/order');
    }

    public function edit($id_order)
    {
        $datapel = Pelanggan::all();
        $data_layanan = Produk::all();

        $order = Order::with(['pelanggan', 'produk'])
                ->find($id_order);


        // dd($datapel);
        $profil = Profil::first();
        $tanggal = Carbon::now()->locale('id')->isoFormat('dddd, D MMMM Y');
        $jam = Carbon::now()->locale('id')->isoFormat('HH:mm');
        $user = Auth::user();
        $orders = Order::all();
        if (!$order) {
            return redirect('/order')->with('error', 'Data pengeluaran tidak ditemukan.');
        }

        return view('admin.order.edit', [
            'title' => 'Order',
            'orders' => $orders,
            'data' => $order,
            'profil' => $profil,
            'tanggal' => $tanggal,
            'jam' => $jam,
            'datapel' => $datapel,
            'data_layanan' => $data_layanan,
            'operator' => $user ? $user->username : ''
        ]);

    }

    public function update(Request $request, $id_order)
    {

        $request->validate([
            'desk' => 'id_pelanggan',
            'jumlah' => 'id_layanan',
            'waktu' => 'qty'
        ]);

        $order = Order::find($id_order);

        if (!$order) {
            // Handle jika data tidak ditemukan, misalnya redirect atau tampilkan pesan error.
            return redirect('/order')->with('error', 'Data order tidak ditemukan.');
        }

        $order->id_pelanggan = $request->id_pelanggan;
        $order->id_layanan = $request->id_layanan;
        $order->qty = $request->qty;

        $order->save();

        return redirect('/order')->with('success', 'Data pengeluaran berhasil diperbarui.');
    }

    
}
