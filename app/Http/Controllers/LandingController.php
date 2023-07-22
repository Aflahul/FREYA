<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

use App\Models\Artikel;
use App\Models\Profil;

use App\Models\Produk;
class LandingController extends Controller

{
    // public function index(){
    //     $tanggal = Carbon::now()->locale('id')->isoFormat('dddd, D MMMM Y');
    //     $jam = Carbon::now()->locale('id')->isoFormat('HH:mm');
    //     return view('landing.landing',[
    //        "title" => "Home"],
    //      compact('tanggal', 'jam')); 

    //     }
    public function index()
    {
        $artikel = Artikel::all();
        $produk = Produk::all();
        $profil = Profil::first();
        return view('landing.home', [
            'title' => 'Home',
            'artikel' => $artikel,
            'produk' => $produk,
            'profil' => $profil
        ]);
    }
}
