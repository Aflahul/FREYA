<?php

namespace App\Http\Controllers;

use Exception;

use Carbon\Carbon;
use App\Models\Profil;
use App\Models\Artikel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArtikelController extends Controller
{
    public function index()
    {
        $profil = Profil::first();
        $artikel = Artikel::all();
        $tanggal = Carbon::now()->locale('id')->isoFormat('dddd, D MMMM Y');
        $jam = Carbon::now()->locale('id')->isoFormat('HH:mm');
        // dd($artikel);
        return view('admin.artikel.artikel', [
            'title' => 'Artikel',
            'artikel' => $artikel,
            'profil' => $profil,
            'tanggal' => $tanggal,
            'jam' => $jam
        ]);
    }
    public function create()
    {


        return view('admin.artikel.tambah', [
            'title' => 'Artikel',
        ]);
    }
    public function store(Request $request)
    {

        $request->validate([
            'judul' => 'required',
            'Isi' => 'required',
            'status' => 'required',
            // 'foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'waktu' => 'required|date_format:Y-m-d',
        ]);

        // Mengambil file gambar yang diunggah
        // $foto = $request->file('foto');
        // Menyimpan file gambar ke direktori yang diinginkan
        // $fotoPath = $foto->store('public/asset/img');

        $datas = [
            'judul' => $request->judul,
            'Isi' => $request->Isi,
            'status' => $request->status,
            // 'foto' => $fotoPath,
            'waktu' => $request->waktu,
        ];

        // Simpan data ke dalam database

        Artikel::create($datas);
        // dd($datas);
        return redirect('/artikel');
        // if ($result) {
        //     return redirect('/artikel')->with('success', 'Artikel berhasil ditambahkan.');
        // } else {
        //     return redirect()->back()->with('error', 'Gagal menambahkan artikel. Silakan coba lagi.');
        // }
    }



    public function update(Request $request, $id_artikel)
    {
        $artikel = Artikel::find($id_artikel);

        $artikel->judul = $request->input('judul');
        $artikel->Isi = $request->input('Isi');
        $artikel->status = $request->input('status');
        // $artikel->foto = $request->input('foto');


        $artikel->save();

        return redirect('/artikel');
    }

    public function destroy($id_artikel)
    {
        $artikel = Artikel::find($id_artikel);
        // dd($artikel);
        $artikel->delete();
        return redirect('/artikel');
    }
}
