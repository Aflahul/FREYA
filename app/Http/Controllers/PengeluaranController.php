<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use App\Models\Pengeluaran;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Profil;

class PengeluaranController extends Controller
{
    public function index()
    {
        $profil = Profil::first();
        //$pengeluaran = Pengeluaran::with('operator')->get();
        $pengeluaran = Pengeluaran::orderBy('created_at','desc')->get();
        $tanggal = Carbon::now()->locale('id')->isoFormat('dddd, D MMMM Y');
        $jam = Carbon::now()->locale('id')->isoFormat('HH:mm');
        $user = Auth::user();
        $operator = $user ? $user->username : '';
        return view('admin.pengeluaran.pengeluaran', [
            'title' => 'Pengeluaran',
            'pengeluaran' => $pengeluaran,
            'profil' => $profil,
            'tanggal' => $tanggal,
            'jam' => $jam,
            'operator' => $operator
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
            'pengeluaran' => 'required',
            'desk' => 'required',
            'jumlah' => 'required',
            'waktu' => 'required',
        ]);

        // Generate kode pengeluaran
        $lastCode = Pengeluaran::max('kd_pengeluaran');
        $nextCode = 'OUT0001'; // Kode awal
        if ($lastCode) {
            $numericPart = (int) substr($lastCode, 3); // Ambil bagian angka dari kode terakhir
            $nextNumericPart = $numericPart + 1;
            $nextCode = 'OUT' . str_pad($nextNumericPart, 4, '0', STR_PAD_LEFT); // Format ulang kode dengan tambahan angka
        }


        $data = new Pengeluaran();
        $data->kd_pengeluaran = $nextCode;
        $data->pengeluaran = $request->pengeluaran;
        $data->desk = $request->desk;
        $data->jumlah = $request->jumlah;
        $data->waktu = $request->waktu;
        $data->save();

        return redirect('/pengeluaran');
    }



    public function edit($id_pengeluaran)
    {
        $pengeluaran = Pengeluaran::find($id_pengeluaran);
        $profil = Profil::first();
        $tanggal = Carbon::now()->locale('id')->isoFormat('dddd, D MMMM Y');
        $jam = Carbon::now()->locale('id')->isoFormat('HH:mm');
        $user = Auth::user();
        $pengeluarans = Pengeluaran::orderBy('created_at', 'desc')->get();
        if (!$pengeluaran) {
            return redirect('/pengeluaran')->with('error', 'Data pengeluaran tidak ditemukan.');
        }

        return view('admin.pengeluaran.edit', [
            'title' => 'Pengeluaran',
            'pengeluarans' => $pengeluarans,
            'pengeluaran' => $pengeluaran,
            'profil' => $profil,
            'tanggal' => $tanggal,
            'jam' => $jam,
            'operator' => $user ? $user->username : ''
        ]);
    }


    public function update(Request $request, $id_pengeluaran)
    {
        $request->validate([
            'pengeluaran' => 'required',
            'desk' => 'required',
            'jumlah' => 'required',
            'waktu' => 'required'
        ]);

        $pengeluaran = Pengeluaran::find($id_pengeluaran);

        if (!$pengeluaran) {
            // Handle jika data tidak ditemukan, misalnya redirect atau tampilkan pesan error.
            return redirect('/pengeluaran')->with('error', 'Data pengeluaran tidak ditemukan.');
        }

        $pengeluaran->pengeluaran = $request->pengeluaran;
        $pengeluaran->desk = $request->desk;
        $pengeluaran->jumlah = $request->jumlah;
        $pengeluaran->waktu = $request->waktu;

        $pengeluaran->save();

        return redirect('/pengeluaran')->with('success', 'Data pengeluaran berhasil diperbarui.');
    }


    public function destroy($id_pengeluaran)
    {
        $pengeluaran = Pengeluaran::find($id_pengeluaran);
        // dd($pengeluaran);
        $pengeluaran->delete();
        return redirect('/pengeluaran');
    }
}
