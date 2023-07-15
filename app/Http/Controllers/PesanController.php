<?php

namespace App\Http\Controllers;

use App\Models\Pesan;
use Illuminate\Http\Request;
use Carbon\Carbon;
class PesanController extends Controller
{
    public function index()
    {
        return view('admin.pesan.pesan', [
            "title" => "Pesan"
        ]);
    }
    public function create()
    {
        return view('admin.pesan.tambah', [
            'title' => 'Tambah Pesan',
        ]);
    }

    public function store(Request $request)
    {
        // Validasi
        $request->validate([
            'username' => 'required',
            'password' => 'required',
            'level' => 'required'

        ]);
        $datas = [
            'username' => $request->username,
            'password' => $request->password,
            'level' => $request->level,
        ];

        $datas['password'] = bcrypt($datas['password']);

        // Simpan data pengguna ke dalam database
        Pesan::create($datas);
        return redirect('/pesan');
    }

    public function edit($id_pesan)
    {
        $pesan = Pesan::where('id_pesan', $id_pesan)->first();
        return view('admin.pesan.edit', [
            'title' => 'Edit Pesan',
            'pesan' => $pesan
        ]);
    }

    public function update(Request $request, $id_pesan)
    {
        $pesan = Pesan::find($id_pesan);
        $pesan->pesanname = $request->input('pesanname');


        $pesan->save();

        return redirect('/pesan');
    }

    public function destroy($id_pesan)
    {
        $pesan = Pesan::find($id_pesan);
        //dd($pesan);
        $pesan->delete();
        return redirect('/pesan');
    }
}
