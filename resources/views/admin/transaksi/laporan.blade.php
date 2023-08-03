@extends('layout.index')

@section('content')
    <div class="p-4 mt-10 sm:ml-72">
        <div class="px-4 pt-2 overflow-x-auto">
            <div class="mb-5  ">
                <h1 class="py-3">
                    Filter Tanggal
                </h1>
                @if ($errors->has('filtered_produk_data'))
                            <div class="alert alert-danger bg-red-500 p-1 my-2 text-white rounded text-center">
                                {{ $errors->first('filtered_produk_data') }}
                            </div>
                        @endif
                <div class=" mb-3 w-full flex gap=5 items-center justify-between   ">
                    <div class="flex  items-center">
                        <form action="/filterINV" method="get">
                            <input type="date" name="tgl_awal" id="tgl_awal" class="border bg-inherit rounded px-2 py-1">
                            <label for="">To:</label>
                            <input type="date" name="tgl_akhir" id="tgl_akhir" class="border bg-latar rounded px-2 py-1">
                            <button type="submit"
                                class="bg-kuning hover:bg-sudah text-black drop-shadow hover:text-white ml-2 px-4 py-1 rounded">Filter</button>
                            <a href="/resetfilterT"
                                class="bg-sudah hover:bg-belum drop-shadow text-white hover:text-white ml-0.5 px-4 py-1 rounded"
                                type="submit">Reset
                            </a>
                        </form>

                    </div>
                    <div class="">
                        <a href="/cetakTransaksi">
                            <div class="bg-sudah px-4 py-1 hover:text-black drop-shadow text-white h-fit rounded">Cetak Rekap Pendapatan
                                <i class="fa-solid fa-print "></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!--pelanggan-->
            <div class="drop-shadow-lg overflow-x-auto">
                <div class="bg-latar border-t-[6px] border-sudah rounded-[4px]">
                    <table class="w-full text-sm text-left ">
                        <thead>
                            <tr class="border-b-2  ">
                                <th scope="col" class="px-2 py-5">Kode</th>
                                <th scope="col" class="px-2 py-5">Tanggal</th>
                                <th scope="col" class="px-2 py-5">Layanan</th>
                                <th scope="col" class="px-2 py-5">Pelanggan</th>
                                <th scope="col" class="px-2 py-5">Total</th>
                                <th scope="col" class="px-2 py-5 text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($transaksi as $item)
                                <tr class=" odd:bg-slate-200 even:bg-latar ">
                                    <td class="px-2 text-md font-bold uppercase">
                                        <p class="text-sudah">{{ $item->kd_order }}</p>
                                    </td>
                                    <td class="px-2">
                                        <p>{{ $item->created_at->format('d/m/Y') }}</p>
                                    </td>
                                    <td class="px-2 py-1  ">
                                        <p class="">{{ $item->produk->nama_layanan }}</p>
                                    </td>
                                    <td class="px-2 py-1  ">
                                        <p class="">{{ $item->pelanggan->namapel }}</p>
                                    </td>
                                    <td class="px-2">
                                        <p class="font-bold text-base">Rp. {{number_format($item->total,0, ',', '.')  }}</p>
                                    </td>
                                    <td class="text-belum text-center">
                                        <a href="/cetakNT/{{ $item->id_order }}">
                                            <i class="fa-solid fa-print fa-lg"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="mt-4">
                        {{ $transaksi->links() }}
                    </div>
                </div>
            </div>
        </div>
    @endsection
