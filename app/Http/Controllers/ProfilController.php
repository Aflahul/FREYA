<?php

namespace App\Http\Controllers;

use App\Models\Profil;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    //
    public function index()
    {
        $profil = Profil::first();
        // dd($profil);
        return view('admin.profil.profil', [
            'title' => 'Profil Laundry',
            'profil' => $profil
        ]);
    }

    // public function edit($id_laundry)
    // {
    //     $profil = Profil::where('id_laundry', $id_laundry)->first();
    //     return view('admin.profil.edit', [
    //         'title' => 'Profil',
    //         'profil' => $profil
    //     ]);
    // }
    public function update(Request $request, $id_laundry)
    {

        $profil = Profil::find($id_laundry);
        $profil->nama_laundry = $request->input('nama_laundry');
        $profil->tagline = $request->input('tagline');
        $profil->desk = $request->input('desk');
        $profil->alamat = $request->input('alamat');
        $profil->logo = $request->input('logo');
        $profil->kontak = $request->input('kontak');

        // dd($profil);
        $profil->save();

        return redirect('/profil');
    }
}
