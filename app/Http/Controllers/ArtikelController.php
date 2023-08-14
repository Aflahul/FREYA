<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Exception;
use Carbon\Carbon;
use App\Models\Profil;
use App\Models\Artikel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Pelanggan;

class ArtikelController extends Controller
{
    public function index()
    {
        $profil = Profil::first();
        $artikel = Artikel::all();
        $tanggal = Carbon::now()->locale('id')->isoFormat('dddd, D MMMM Y');
        $jam = Carbon::now()->locale('id')->isoFormat('HH:mm');
        return view('admin.artikel.artikel', [
            'title' => 'Artikel',
            'artikel' => $artikel,
            'profil' => $profil,
            'tanggal' => $tanggal,
            'jam' => $jam
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'Isi' => 'required',
            'foto' =>
            'required|image',
        ]);

        // Mengambil informasi gambar yang diunggah
        $foto = $request->file('foto');
        $foto_path = $foto->storeAs('public', $foto->getClientOriginalName(), 'public');
        $data = [
            'judul' => $request->judul,
            // 'Isi' => htmlspecialchars_decode($request->Isi),
            'Isi' => htmlspecialchars($request->Isi),
            'foto' => $foto_path,
        ];
        // Simpan data ke dalam database
        Artikel::create($data);
        return redirect('/artikel')->with('success', 'Artikel berhasil ditambahkan.');
    }

    public function edit($id_artikel)
    {

        $tanggal = Carbon::now()->locale('id')->isoFormat('dddd, D MMMM Y');
        $jam = Carbon::now()->locale('id')->isoFormat('HH:mm');
        $profil = Profil::first();
        $artikels = Artikel::all();
        $artikel = Artikel::where('id_artikel', $id_artikel)->first();
        return view('admin.artikel.edit', [
            'title' => 'Setting-User',
            'artikel' => $artikel,
            'artikels' => $artikels,
            'profil' => $profil,
            'tanggal' => $tanggal,
            'jam' => $jam
        ]);
    }

    public function update(Request $request, $id_artikel)
    {
        $artikel = Artikel::find($id_artikel);

        $artikel->judul = $request->input('judul');
        $artikel->Isi = htmlspecialchars($request->input('Isi_artikel'));

        // Mengambil informasi gambar yang diunggah
        $foto = $request->file('foto');
        if ($foto) {
            $foto_path = $foto->storeAs('public', $foto->getClientOriginalName(), 'public');
            $artikel->foto = $foto_path;
        }

        $artikel->save();

        return redirect('/artikel')->with('success', 'Artikel berhasil ditambahkan.');
    }

    public function destroy($id_artikel)
    {
        $artikel = Artikel::find($id_artikel);
        $artikel->delete();
        return redirect('/artikel');
    }
}
