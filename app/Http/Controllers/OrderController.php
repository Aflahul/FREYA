<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function index()
    {

        $order = DB::table('tb_order')
                    ->join('tb_pelanggan', 'tb_order.id_pelanggan', '=', 'tb_pelanggan.id_pelanggan')
                    ->select('tb_order.*', 'tb_pelanggan.namapel')
                    ->paginate(10);

            foreach ($order as $item) {
                        $item->created_at = \Carbon\Carbon::parse($item->created_at)->locale('id')->isoFormat('D MMMM YYYY');
            
                    }
        // dd($order);

        return view('admin.order.order', [
            "title" => "Order",
            'data' => $order,
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
            'harga'
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
        
        $kd_order = $request->kd_order;
        $id_pelanggan = $request->id_pelanggan;
        $nama_layanan = $request->nama_layanan;
        $durasi = $request->durasi;
        $harga = Produk::where('nama_layanan', $nama_layanan)->value('harga');
        $qty = $request->qty;
        $total = $harga * $qty;

        $order = new Order;
        $order->kd_order = $request->kd_order;
        $order->durasi = $request->durasi;
        $order->id_pelanggan = $request->id_pelanggan;
        $order->nama_layanan = $request->nama_layanan;
        $order->qty = $qty;
        $order->total = $total;
        $order->status = 'Sedang Cuci';
        // dd($order);
        $order->save();

        return redirect('/order');
        
    }
}
