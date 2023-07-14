<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

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

        return view('layout.index_pelanggan', [
            "title" => "Home"
        ]);
    }
}
