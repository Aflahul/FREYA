<?php

namespace App\Http\Controllers;

use App\Models\Profil;
use App\Models\Order;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
class OrderController extends Controller
{
    public function index()
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
            'harga',
            'durasi'
        )
            ->get();
        $order = DB::table('tb_order')
                    ->join('tb_pelanggan', 'tb_order.id_pelanggan', '=', 'tb_pelanggan.id_pelanggan')
                    ->join('tb_layanan', 'tb_order.nama_layanan', '=', 'tb_layanan.nama_layanan')
                    ->select('tb_order.*', 'tb_pelanggan.namapel', 'tb_layanan.satuan')
                    ->paginate(10);

        // $order = DB::table('tb_order')
        //             ->join('tb_pelanggan', 'tb_order.id_pelanggan', '=', 'tb_pelanggan.id_pelanggan')
        //             ->select('tb_order.*', 'tb_pelanggan.namapel')
        //             ->paginate(10);

        // dd($order);

            foreach ($order as $item) {
                        $item->created_at = \Carbon\Carbon::parse($item->created_at)->locale('id')->isoFormat('D MMMM YYYY');

                        
                    }
                    $tanggal = Carbon::now()->locale('id')->isoFormat('dddd, D MMMM Y');
                    $jam = Carbon::now()->locale('id')->isoFormat('HH:mm');
        $profil = Profil::first();
                    // return view('admin.order.order', [
                    //     "title" => "Order"
                    //     ], compact('tanggal', 'jam'));
        

        return view('admin.order.order', [
            'title' => 'Order',
            'data' => $order,
            'profil' => $profil,
            'tanggal' => $tanggal,
            'jam' => $jam,
            'datapel' => $namapel,
            'data_layanan' => $nama_layanan
        ]);
        
        
    }

    public function create()
    {
        $tanggal = Carbon::now()->locale('id')->isoFormat('dddd, D MMMM Y');
        $jam = Carbon::now()->locale('id')->isoFormat('HH:mm');
        $profil = Profil::first();

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
            'harga',
            'durasi'
        )
        ->get();

        // dd($nama_layanan);
        return view('admin.order.tambah', [
            "title" => "Order",
            'datapel' => $namapel,
            'profil' => $profil,
            'tanggal' => $tanggal,
            'jam' => $jam,
            'data_layanan' => $nama_layanan
        ]);
    }

    public function store(Request $request)
    {
        
        $kd_order = $request->kd_order;
        $id_pelanggan = $request->id_pelanggan;
        $nama_layanan = $request->nama_layanan;
        $harga = Produk::where('nama_layanan', $nama_layanan)->value('harga');
        $Durasi= Produk::where('nama_layanan',$nama_layanan)->value('durasi');
        $qty = $request->qty;
        $total = $harga * $qty;

        $order = new Order;
        $order->kd_order = $request->kd_order;
        $order->durasi = $Durasi;
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
