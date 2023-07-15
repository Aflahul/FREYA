<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
class TransaksiController extends Controller
{
    public function index()
    {
        $tanggal = Carbon::now()->locale('id')->isoFormat('dddd, D MMMM Y');
        $jam = Carbon::now()->locale('id')->isoFormat('HH:mm');
        return view('admin.transaksi.laporan', [
            "title" => "Transaksi"
        ], compact('tanggal', 'jam'));
       
     
    }
}
