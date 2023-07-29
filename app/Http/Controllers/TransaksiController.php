<?php

namespace App\Http\Controllers;


use Carbon\Carbon;
use App\Models\Order;
use App\Models\Produk;
use App\Models\Profil;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class TransaksiController extends Controller
{
    public function index()
    {
        $profil = Profil::first();
        $tanggal = Carbon::now()->locale('id')->isoFormat('dddd, D MMMM Y');
        $jam = Carbon::now()->locale('id')->isoFormat('HH:mm');

        //Memanggil data transaksi
        // Mengambil data dari session jika ada
        $transaksi = Session::get('filtered_order_data');
        if (!$transaksi) {
            $transaksi = Order::with(['pelanggan', 'produk'])
                ->where('status', '=', 'Selesai Dicuci')
                ->where('status_pembayaran', '=', 'Sudah Bayar')
                ->paginate(20);
        }

        // dd($transaksi);

        return view('admin.transaksi.laporan', [
            'title' => 'Transaksi',
            'profil' => $profil,
            'tanggal' => $tanggal,
            'jam' => $jam,
            'transaksi' => $transaksi,
        ]);
    }


    public function filterData(Request $request)
    {
        $tgl_awal = $request->input('tgl_awal');
        $tgl_akhir = $request->input('tgl_akhir');

        // Filter data dari tabel Order berdasarkan kriteria filter tanggal, status, dan status_pembayaran
        $dataOrder = Order::whereBetween('updated_at', [$tgl_awal, $tgl_akhir])
            ->where('status', 'Selesai Dicuci')
            ->where('status_pembayaran', 'Sudah Bayar')
            ->latest('id_order')
            ->paginate(20);
        // Simpan data Order ke dalam session
        Session::put('filtered_order_data', $dataOrder);

        // Filter data dari tabel Produk berdasarkan kriteria filter tanggal
        $dataProduk = Produk::whereBetween('updated_at', [$tgl_awal, $tgl_akhir])->get();

        // Simpan data Produk ke dalam session
        Session::put('filtered_produk_data', $dataProduk);

        // Simpan tanggal awal dan tanggal akhir di sesi
        Session::put('tgl_awal', $tgl_awal);
        Session::put('tgl_akhir', $tgl_akhir);

        // Redirect ke halaman laporan
        return redirect('/laporan');
    }



    public function cetak($id_order)
    {
        $profil = Profil::first();
        // Jika Anda ingin memuat data pelanggan dan produk dalam satu query, gunakan with()
        $transaksi = Order::with('pelanggan', 'produk')->findOrFail($id_order);

        return view('admin.transaksi.resi', [
            'transaksi' => $transaksi,
            'profil' => $profil,
        ]);
    }

    public function cetakTransaksi()
    {

        $profil = Profil::first();

        // Cek apakah ada sesi filter data untuk Produk
        $dataProduk = Session::get('filtered_produk_data');
        if (!$dataProduk) {
            return redirect()->back()->withErrors(['filtered_produk_data' => 'Lakukan filter data terlebih dahulu.']);
        }
        // Hitung total pendapatan
        $totalPendapatan = 0;
        foreach ($dataProduk as $produk) {
            $totalPendapatan += $produk->harga * $produk->total_order;
        }
        session::put('pendapatan',$totalPendapatan); // Jika ada sesi filter data untuk Produk, maka gunakan data tersebut
        return view('admin.transaksi.cetaktransaksi', [
            'profil' => $profil,
            'produk' => $dataProduk,
            'totalPendapatan' => $totalPendapatan,

        ]);
    }
    public function resetFilter()
    {
        // Hapus sesi filter data untuk Order
        Session::forget('filtered_order_data');

        // Hapus sesi filter data untuk Produk
        Session::forget('filtered_produk_data');

        // Redirect kembali ke halaman sebelumnya dengan pesan sukses (opsional)
        return redirect('/laporan')->with('success', 'Filter data telah direset.');
    }
}
