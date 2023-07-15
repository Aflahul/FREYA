<?php

namespace App\Http\Controllers;

use App\Models\Profil;
use Illuminate\Http\Request;
use Carbon\Carbon;
class KasController extends Controller
{
    public function index()
    {
        $profil = Profil::first();
        $tanggal = Carbon::now()->locale('id')->isoFormat('dddd, D MMMM Y');
        $jam = Carbon::now()->locale('id')->isoFormat('HH:mm');
        return view('admin.transaksi.aruskas', [
            'title' => 'Arus Kas',
            'profil' => $profil,
            'tanggal' => $tanggal,
            'jam' => $jam
        ]);
        
    }
}
