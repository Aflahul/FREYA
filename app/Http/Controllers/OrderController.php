<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function index()
    {
        return view('admin.order.order', [
            "title" => "Order"
        ]);
    }

    public function create()
    {
        $namapel = DB::table('tb_pelanggan')
        ->select(
            'id_pelanggan',
            'namapel',
        )
        ->get();

        $nama_layanan = DB::table('tb_layanan')
        ->select(
            'id_layanan',
            'nama_layanan',
        )
        ->get();

        // dd($nama_layanan);
        return view('admin.order.tambah', [
            "title" => "Order",
            'datapel' => $namapel,
            'data_layanan' => $nama_layanan
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'kd_order' => 'required',
            'nama_pelanggan' => 'required',
            'jenis_laundry' => 'required',
            'durasi' => 'required',
            'qty' => 'required'


        ]);
        $datas = [
            'kd_order' => $request->kd_order,
            'nama_pelanggan' => $request->nama_pelanggan,
            'jenis_laundry' => $request->jenis_laundry,
            'durasi' => $request->durasi,
            'qty' => $request->qty,

        ];

        dd($datas);

        // Simpan data ke dalam database
        // Pengeluaran::create($datas);
        // return redirect('/pengeluaran');
        // return view('admin.order.order', [
        //     "title" => "Order"
        // ]);
    }
}
