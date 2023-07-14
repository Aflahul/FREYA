<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;

// use Illuminate\Support\Facades\DB;

// try {
//     DB::connection()->getPdo();
//     echo "Koneksi database berhasil!";
// } catch (\Exception $e) {
//     die("Koneksi database gagal: " . $e->getMessage());
// }


class DashboardController extends Controller
{
    public function index()
    {
        $tanggal = Carbon::now()->locale('id')->isoFormat('dddd, D MMMM Y'); 
        $jam = Carbon::now()->locale('id')->isoFormat('HH:mm');
        return view('admin.dashboard.dashboard', [
            "title" => "Dashboard"
        ], compact('tanggal','jam'));
    }

    public function index_pegawai()
    {
        return view('pegawai.dashboard.dashboard_pegawai', [
            "title" => "Dashboard"
        ]);
    }
    public function myFunction()
    {
        $tanggal = Carbon::now()->locale('id')->isoFormat('dddd, D MMMM Y HH:mm:ss');
        return view('admin.dashboard.dashboard', compact('tanggal'));
    }
}
