<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

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
        $produk = Produk::all();
        $profil = Profil::first();
        return view('landing.home', [
            'title' => 'Home',
            'produk' => $produk,
            'profil' => $profil
        ]);
    }
}
