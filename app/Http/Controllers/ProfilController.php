<?php

namespace App\Http\Controllers;

use App\Models\Profil;
use Illuminate\Http\Request;
use Carbon\Carbon;
class ProfilController extends Controller
{
    //
    public function index()
    {
        $profil = Profil::first();
        // dd($profil);
        $tanggal = Carbon::now()->locale('id')->isoFormat('dddd, D MMMM Y');
        $jam = Carbon::now()->locale('id')->isoFormat('HH:mm');
        return view('admin.profil.profil', [
            'title' => 'Profil Laundry',
            'profil' => $profil
        ], compact('tanggal', 'jam'));
        
      
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
