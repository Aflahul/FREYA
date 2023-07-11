<?php

namespace App\Http\Controllers;

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
        return view('admin.dashboard.dashboard', [
            "title" => "Dashboard"
        ]);
    }

    public function index_pegawai()
    {
        return view('pegawai.dashboard.dashboard_pegawai', [
            "title" => "Dashboard"
        ]);
    }
}
