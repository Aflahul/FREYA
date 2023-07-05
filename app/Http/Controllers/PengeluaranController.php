<?php

namespace App\Http\Controllers;
use App\Models\Pengeluaran;
use Illuminate\Http\Request;

class PengeluaranController extends Controller
{
    //
    public function index(){
        $pengeluaran = Pengeluaran::all();
        return view('admin.pengeluaran.pengeluaran', [
            'title'=> 'Pengeluaran',
            'pengeluaran'=>$pengeluaran
        ]);
    }
    public function create()
    {
        return view('admin.pengeluaran.tambah', [
            'title' => 'Pengeluaran',
        ]);
    }
    public function store(Request $request)
    {
        // Validasi input form 
        $request->validate([
            'kd_pengeluaran'=> 'required', 
            'pengeluaran'=> 'required', 
            'desk'=> 'required', 
            'jumlah'=> 'required', 
            'waktu' => 'required'
            

        ]);
        $datas = [
            'kd_pengeluaran'=> $request->kd_pengeluaran,
            'pengeluaran'=> $request->pengeluaran,
            'desk'=>$request->desk, 
            'jumlah'=> $request->jumlah,
            'waktu' => $request->waktu,          
             
        ];

        // Simpan data ke dalam database
        Pengeluaran::create($datas);
        return redirect('/pengeluaran');
    }
    
    public function edit($id_pengeluaran)
    {
        $pengeluaran = Pengeluaran::where('id_pengeluaran', $id_pengeluaran)->first();
        return view('admin.pengeluaran.edit', [
            'title' => 'Pengeluaran',
            'pengeluaran' => $pengeluaran
        ]);
    }
    public function update(Request $request, $id_pengeluaran)
    {
        $pengeluaran = Pengeluaran::find($id_pengeluaran); 
        $pengeluaran->kd_pengeluaran = $request->input('kd_pengeluaran');
        $pengeluaran->pengeluaran = $request->input('pengeluaran');
        $pengeluaran->desk = $request->input('desk');
        $pengeluaran->jumlah = $request->input('jumlah');
        $pengeluaran->waktu = $request->input('waktu');

        $pengeluaran->save();

        return redirect('/pengeluaran');
    }

    public function destroy($id_pengeluaran)
    {
        $pengeluaran = Pengeluaran::find($id_pengeluaran);
        // dd($pengeluaran);
        $pengeluaran->delete();
        return redirect('/pengeluaran');
    }

}
