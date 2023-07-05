<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    //
    public function index()
    {
        $produk = Produk::all();
        return view('admin.produk.produk', [
            'title' => 'Produk & Layanan',
            'produk' => $produk
        ]);
    }
    public function create()
    {
        return view('admin.produk.tambah', [
            'title' => 'Produk & Layanan',
        ]);
    }
    public function store(Request $request)
    {
        // Validasi input form 
        $request->validate([ 
            'nama_layanan'=> 'required', 
            'desk'=> 'required', 
            'satuan'=> 'required', 
            'harga'=> 'required', 
        
        ]);
        $datas = [
            'nama_layanan'=> $request->nama_layanan , 
            'desk'=> $request->desk, 
            'satuan'=> $request->satuan , 
            'harga'=> $request->harga , 
            
        ];

        // Simpan data ke dalam database
        Produk::create($datas);
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
