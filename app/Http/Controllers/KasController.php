<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Arus;
use App\Models\Profil;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class KasController extends Controller
{
    public function index()
    {
        $profil = Profil::first();
        $tanggal = Carbon::now()->locale('id')->isoFormat('dddd, D MMMM Y');
        $jam = Carbon::now()->locale('id')->isoFormat('HH:mm');
        $filter = Session::get('filtered_data');
        $arus = Arus::latest('id_arus')->paginate(20);

        // dd($arus);
        return view('admin.transaksi.aruskas', [
            'title' => 'Arus Kas',
            'profil' => $profil,
            'filter' => $filter,
            'tanggal' => $tanggal,
            'jam' => $jam,
            'arus' => $arus,
        ]);
    }
    public function filterData(Request $request)
    {
        $tgl_awal = $request->input('tgl_awal');
        $tgl_akhir = $request->input('tgl_akhir');

        // Mengambil data sesuai dengan rentang tanggal
        $data = Arus::whereBetween('updated_at', [$tgl_awal, $tgl_akhir])->latest('id_arus')->paginate(20);

        // Simpan data ke dalam session
        Session::put('filtered_data', $data);

        // Redirect ke halaman tujuan (laporan)
        return redirect('/kas');
    }
    public function cetak()
    {
        //belum ada bladenya ini
        // return view('admin.transaksi.cetakKas');
    }
}
