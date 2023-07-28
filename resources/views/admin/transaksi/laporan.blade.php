@extends('layout.index')

@section('content')
    <div class="p-4 mt-10 sm:ml-72">
        <div class=" drop-shadow-lg overflow-x-auto">
            <h1 class="py-3">
                Filter Tanggal
            </h1>
            <form action="/filterINV" method="get" class="mb-4">
                <input type="date" name="tgl_awal" id="tgl_awal" class="border rounded px-2 py-1">
                <label for="">To:</label>
                <input type="date" name="tgl_akhir" id="tgl_akhir" class="border rounded px-2 py-1">
                <button type="submit"
                    class="bg-kuning hover:bg-sudah text-black hover:text-white ml-2 px-4 py-1.5 rounded">Filter</button>
            </form>
        </div>
        <!--pelanggan-->
        <div class="pt-6 drop-shadow-lg overflow-x-auto">
            <div class="bg-white border-t-[6px] border-sudah rounded-[4px]">
                <table class="w-full text-sm text-left ">
                    <thead>
                        <tr class="border-b-2  ">
                            <th scope="col" class="px-2 py-5">Kode Invoice</th>
                            <th scope="col" class="px-2 py-5">Pelanggan</th>
                            <th scope="col" class="px-2 py-5">Waktu</th>
                            <th scope="col" class="px-2 py-5">Total</th>
                            <th scope="col" class="px-2 py-5 text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($transaksi as $item)
                            <tr class=" ">
                                <td class="px-2 text-md font-bold uppercase">
                                    <p class="text-sudah">{{ $item->kd_order }}</p>
                                </td>
                                <td class="px-2 py-1  ">
                                    <p class="">{{ $item->pelanggan->namapel }}</p>
                                </td>
                                <td class="px-2">
                                    <p>{{ $item->created_at }}</p>
                                </td>
                                <td class="px-2">
                                    <p class="font-bold text-base">Rp. {{ $item->total }}</p>
                                </td>
                                <td class="text-belum text-center">
                                    <a href="/cetakINV/{{ $item->id_order }}">
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
