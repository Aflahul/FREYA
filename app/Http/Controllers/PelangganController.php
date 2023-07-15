<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Pelanggan;
use Illuminate\Http\Request;
use Carbon\Carbon;

class PelangganController extends Controller
{
    public function index()
    {
        $pelanggan = Pelanggan::all();
        // dd($pelanggan) ;
        $tanggal = Carbon::now()->locale('id')->isoFormat('dddd, D MMMM Y');
        $jam = Carbon::now()->locale('id')->isoFormat('HH:mm');
        return view('admin.pelanggan.pelanggan', [
            'title' => 'Pelanggan',
            'pelanggan' => $pelanggan,
        ], compact('tanggal', 'jam'));
        
       
    }

    public function create()
    {
        return view('admin.pelanggan.tambah', [
            'title' => 'Pelanggan',
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
        $datas = [
            'namapel' => $request->namapel,
            'kontak' => $request->kontak,
            'alamat' => $request->alamat,
        ];

       
        // Simpan data  ke dalam database
        Pelanggan::create($datas);
        return redirect('/pelanggan');
    }


    public function edit($id_pelanggan)
    {
        $pelanggan = Pelanggan::where('id_pelanggan', $id_pelanggan)->first();
        return view('admin.pelanggan.edit', [
            'title' => 'Pelanggan',
            'pelanggan' => $pelanggan
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
