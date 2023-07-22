@extends('layout.index')

@section('content')
    <div class="p-8 mt-20 sm:ml-72">
        <div class=" drop-shadow-lg relative overflow-x-auto">
            <h1 class="py-3">
                Filter Tanggal
            </h1>
            <div class="flex flex-auto justify-between w-fit items-center">
                <div class=" object-center flex justify-center items-center">
                    <input type="date" id="tglawal" class="h-8 rounded-[4px] ">
                </div>
                <div class="px-2  w-fit object-center flex justify-center items-center">
                    <p>Sampai</p>
                </div>
                <div class=" object-center flex justify-center items-center">
                    <input type="date" id="tglakhir" class="h-8 rounded-[4px] ">
                </div>
                <div class="px-3  object-right flex justify-end items-center">
                    <button type="button"
                        class="flex items-center gap-3 bg-kuning hover:bg-yellow-500 font-medium rounded-md text-sm px-3 py-2">
                        <p>Tampilkan</p>
                    </button>
                </div>
            </div>
        </div>
        <!--pelanggan-->
        <div class="pt-6 drop-shadow-lg relative overflow-x-auto">
            <div class="mb-3 flex items-center">
                <label for="rows" class="mr-2">Show :</label>
                <select id="rows" class="px-2 py-1 border rounded-[4px]">
                    <option value="5">5</option>
                    <option value="10">10</option>
                    <option value="15">15</option>
                </select>
                <label for="rows" class="ml-2">entries</label>
            </div>
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
                                <td class="px-2 text-lg font-bold uppercase">
                                    <p class="text-sudah">{{ $item->kd_order }}</p>
                                </td>
                                <td class="px-2 py-4  ">
                                    <p class="">{{ $item->pelanggan->namapel }}</p>
                                </td>
                                <td class="px-2">
                                    <p>{{ $item->created_at }}</p>
                                </td>
                                <td class="px-2">
                                    <p class="font-bold text-base">Rp. {{ $item->total }}</p>
                                </td>
                                <td class="text-center text-belum">
                                    <i class="fa-solid fa-print fa-2x"></i>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
