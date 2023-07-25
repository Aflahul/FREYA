<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Arus;
use App\Models\Profil;
use Illuminate\Http\Request;

class KasController extends Controller
{
    public function index()
    {
        $profil = Profil::first();
        $tanggal = Carbon::now()->locale('id')->isoFormat('dddd, D MMMM Y');
        $jam = Carbon::now()->locale('id')->isoFormat('HH:mm');

        $arus = Arus::all();
        
        // dd($arus);
        return view('admin.transaksi.aruskas', [
            'title' => 'Arus Kas',
            'profil' => $profil,
            'tanggal' => $tanggal,
            'jam' => $jam,
            'arus' => $arus,
        ]);
        
    }
}
