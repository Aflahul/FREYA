<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Order;
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
        $transaksi = Session::get('filtered_data');
        if (!$transaksi) {
            $transaksi = Order::with(['pelanggan', 'produk'])
            ->where('status', '=', 'Selesai')
            ->where('status_pembayaran', '=', 'Sudah Dibayar')
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

    public function cetakPDF($id_order)
    {
        $transaksi = Order::with(['pelanggan', 'produk'])
            ->where('id_order',$id_order)
            ->first();

        return view('admin.transaksi.laporan', [
            'transaksi' => $transaksi,
        ]);
    }
    public function filterData(Request $request)
    {
        $tgl_awal = $request->input('tgl_awal');
        $tgl_akhir = $request->input('tgl_akhir');

        // Mengambil data sesuai dengan rentang tanggal
        $data = Order::whereBetween('updated_at', [$tgl_awal, $tgl_akhir])->latest('id_order')->paginate(20);

        // Simpan data ke dalam session
        Session::put('filtered_data', $data);

        // Redirect ke halaman tujuan (laporan)
        return redirect('/laporan');
    }
    public function cetak ()
    {
        return view('admin.transaksi.resi');
    }
}
