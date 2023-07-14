<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
class OrderController extends Controller
{
    public function index()
    {
        
        $tanggal = Carbon::now()->locale('id')->isoFormat('dddd, D MMMM Y');
        $jam = Carbon::now()->locale('id')->isoFormat('HH:mm');
        return view('admin.order.order', [
            "title" => "Order"
        ], compact('tanggal', 'jam'));
        
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
        // $request->validate([
        //     'kd_order' => 'required',
        //     'nama_pelanggan' => 'required',
        //     'jenis_laundry' => 'required',
        //     'durasi' => 'required',
        //     'qty' => 'required'


        // ]);
        // $datas = [
        //     'kd_order' => $request->kd_order,
        //     'id_pelanggan' => $request->nama_pelanggan,
        //     'jenis_laundry' => $request->jenis_laundry,
        //     'durasi' => $request->durasi,
        //     'qty' => $request->qty,

        // ];
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
        $order->nama_layanan = $request->$nama_layanan;
        $order->qty = $qty;
        $order->total = $total;
        $order->status = 'belum bayar';
        dd($order);
        $order->save();

        // Produk::
        // $order = Order::create($datas);

        // Order::where('id', $id)->update([
        //     'nilai_gab' => $nilaiGab
        // ]);


        // Simpan data ke dalam database
        // Pengeluaran::create($datas);
        // return redirect('/pengeluaran');
        // return view('admin.order.order', [
        //     "title" => "Order"
        // ]);
    }
}
