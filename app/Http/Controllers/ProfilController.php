<?php

namespace App\Http\Controllers;

use App\Models\Profil;
use Illuminate\Http\Request;
use Carbon\Carbon;

class ProfilController extends Controller
{
    public function index()
    {
        $profil = Profil::first();
        $tanggal = Carbon::now()->locale('id')->isoFormat('dddd, D MMMM Y');
        $jam = Carbon::now()->locale('id')->isoFormat('HH:mm');

        return view('admin.profil.profil', [
            'title' => 'Profil Laundry',
            'profil' => $profil,
            'tanggal' => $tanggal,
            'jam' => $jam
        ]);
    }

    public function update(Request $request, $id_laundry)
    {
        $profil = Profil::find($id_laundry);
        $profil->nama_laundry = $request->input('nama_laundry');
        $profil->tagline = $request->input('tagline');
        $profil->desk = $request->input('desk');
        $profil->alamat = $request->input('alamat');
        $profil->kontak = $request->input('kontak');

        if ($request->hasFile('logo')) {
            $logo = $request->file('logo');
            $imageData = file_get_contents($logo->path());
            $profil->logo = $imageData;
        }

        $profil->save();

        return redirect('/profil');
    }
}
