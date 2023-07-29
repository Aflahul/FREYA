<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Arus;
use App\Models\Profil;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Dompdf\Dompdf;

class KasController extends Controller
{
    public function index()
    {
        $profil = Profil::first();
        $tanggal = Carbon::now()->locale('id')->isoFormat('dddd, D MMMM Y');
        $jam = Carbon::now()->locale('id')->isoFormat('HH:mm');

        // Contoh dalam kontroler atau model
       
        $arus = Session::get('filtered_data');
        if (!$arus) {
            $arus = Arus::latest('id_arus')->paginate(20);
        }
       
        // Ubah data tanggal dari string menjadi objek Carbon
        $arus->getCollection()->transform(function ($item) {
            $item->tgl = Carbon::parse($item->tgl);
            return $item;
        });

        
        return view('admin.transaksi.aruskas', [
            'title' => 'Arus Kas',
            'profil' => $profil,
            'tanggal' => $tanggal,
            'jam' => $jam,
            'arus' => $arus,
        ]);
    }
    public function filterData(Request $request)
    {
        $tgl_awalKAS = $request->input('tgl_awalKAS');
        $tgl_akhirKAS = $request->input('tgl_akhirKAS');

        // Mengambil data sesuai dengan rentang tanggal
        $data = Arus::whereBetween('created_at', [$tgl_awalKAS, $tgl_akhirKAS])->latest('id_arus')->paginate(20);

        // Simpan data ke dalam session
        Session::put('filtered_data', $data);
         Session::put('tgl_awalKAS', $tgl_awalKAS);
        Session::put('tgl_akhirKAS', $tgl_akhirKAS);

        // Redirect ke halaman tujuan (laporan)
        return redirect('/kas');
    }
    public function cetak()
    {
        $profil = Profil::first();
        
        $arus = Session::get('filtered_data');
        if (!$arus) {
            return redirect()->back()->withErrors(['filtered_data' => 'Lakukan filter data terlebih dahulu!!!']);
        }
        $laba = $arus->first()->saldo;

        session::put('laba',$laba);
        return view('admin.transaksi.cetakkas', [
            'arus' => $arus,
            'profil' => $profil,
            'laba' => $laba,
        ]);
    }
    public function resetFilter()
    {
        // Hapus sesi filter data untuk Order
        Session::forget('filtered_data');
        // Redirect kembali ke halaman sebelumnya dengan pesan sukses (opsional)
        return redirect('/kas')->with('success', 'Filter data telah direset.');
    }
}
