<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Pelanggan;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Profil;
class PelangganController extends Controller
{
    public function index()
    {
        $profil = Profil::first();
        $pelanggan = Pelanggan::all();
        // dd($pelanggan) ;
        $tanggal = Carbon::now()->locale('id')->isoFormat('dddd, D MMMM Y');
        $jam = Carbon::now()->locale('id')->isoFormat('HH:mm');
        return view('admin.pelanggan.pelanggan', [
            'title' => 'Pelanggan',
            'pelanggan' => $pelanggan,
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
        return view('admin.pelanggan.tambah', [
            'title' => 'Pelanggan',
            'profil' => $profil,
            'tanggal' => $tanggal,
            'jam' => $jam
        ]);
    }
    public function store(Request $request)
    {
        // Validasi input form 
        $request->validate([
            'namapel' => 'required',
            'kontak' => 'required',
            'alamat' => 'required'
        ]);

        // Buat instance objek Pelanggan
        $pelanggan = new Pelanggan;

        // Atur nilai kolom pada objek Pelanggan
        $pelanggan->namapel = $request->namapel;
        $pelanggan->kontak = $request->kontak;
        $pelanggan->alamat = $request->alamat;

        // Simpan data ke dalam database
        $pelanggan->save();

        return redirect('/pelanggan');
    }


    public function edit($id_pelanggan)
    {
        $tanggal = Carbon::now()->locale('id')->isoFormat('dddd, D MMMM Y');
        $jam = Carbon::now()->locale('id')->isoFormat('HH:mm');
        $profil = Profil::first();
        $pelanggans = Pelanggan::all();
        $pelanggan = Pelanggan::where('id_pelanggan', $id_pelanggan)->first();
        return view('admin.pelanggan.edit', [
            'title' => 'Pelanggan',
            'pelanggan' => $pelanggan,
            'pelanggans' => $pelanggans,
            'profil' => $profil,
            'tanggal' => $tanggal,
            'jam' => $jam
        ]);
        
    }

    public function update(Request $request, $id_pelanggan)
    {
        $pelanggan = Pelanggan::find($id_pelanggan);
        $pelanggan->namapel = $request->input('namapel');
        $pelanggan->kontak = $request->input('kontak');
        $pelanggan->alamat = $request->input('alamat');

        $pelanggan->save();

        return redirect('/pelanggan');
    }

    public function destroy($id_pelanggan)
    {
        $pelanggan = Pelanggan::find($id_pelanggan);
        // dd($pelanggan);
        $pelanggan->delete();
        return redirect('/pelanggan');
    }
}
