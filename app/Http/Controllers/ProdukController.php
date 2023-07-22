<?php

namespace App\Http\Controllers;

use App\Models\Profil;
use App\Models\Produk;
use Illuminate\Http\Request;
use Carbon\Carbon;
class ProdukController extends Controller
{
    //
    public function index()
    {
        $profil = Profil::first();
        $produk = Produk::all();
        $tanggal = Carbon::now()->locale('id')->isoFormat('dddd, D MMMM Y');
        $jam = Carbon::now()->locale('id')->isoFormat('HH:mm');
        return view('admin.produk.produk', [
            'title' => 'Produk & Layanan',
            'produk' => $produk,
            'profil' => $profil,
            'tanggal' => $tanggal,
            'jam' => $jam
        ]);
        
    }
    public function create()
    {
        $profil = Profil::first();
        $tanggal = Carbon::now()->locale('id')->isoFormat('dddd, D MMMM Y');
        $jam = Carbon::now()->locale('id')->isoFormat('HH:mm');
        return view('admin.produk.tambah', [
            'title' => 'Produk & Layanan',
            'profil' => $profil,
            'tanggal' => $tanggal,
            'jam' => $jam
        ]);
    }
    public function store(Request $request)
    {
        // Validasi input form 
        $request->validate([ 
            'nama_layanan'=> 'required', 
            'desk'=> 'required', 
            'desk2'=> 'required', 
            'desk3'=> 'required', 
            'satuan'=> 'required', 
            'durasi'=> 'required', 
            'harga'=> 'required', 
        
        ]);
        $produk = new Produk;

        // Atur nilai kolom pada objek Pelanggan
        $produk->nama_layanan = $request->nama_layanan;
        $produk->desk = $request->desk;
        $produk->desk2 = $request->desk2;
        $produk->desk3 = $request->desk3;
        $produk->satuan = $request->satuan;
        $produk->harga = $request->harga;
        $produk->durasi = $request->durasi;
        $produk->total_order = '0';

        // Simpan data ke dalam database
        $produk->save();

        return redirect('/produk');
    }

    public function edit($id_layanan)
    {
        $produk = Produk::where('id_layanan', $id_layanan)->first();
        return view('admin.produk.edit', [
            'title' => 'Produk & Layanan',
            'produk' => $produk
        ]);
    }
    public function update(Request $request, $id_layanan)
    {
        $produk = Produk::find($id_layanan);
        $produk->kd_layanan = $request->input('kd_layanan');
        $produk->nama_layanan = $request->input('nama_layanan');
        $produk->desk = $request->input('desk');
        $produk->desk2 = $request->input('desk2');
        $produk->desk3 = $request->input('desk3');
        $produk->durasi = $request->input('durasi');
        $produk->satuan = $request->input('satuan');
        $produk->harga = $request->input('harga');

        $produk->save();

        return redirect('/produk');
    }

    public function destroy($id_layanan)
    {
        $produk = Produk::find($id_layanan);
        // dd($produk);
        $produk->delete();
        return redirect('/produk');
    }
}
