@extends('layout.index')

@section('content')
    <div class="p-4 mt-10 sm:ml-72">
        <!--KAS-->
        <div class="p-4 overflow-x-auto">
            <div class="mb-5  ">
                <h1 class="py-3">
                    Filter Tanggal
                </h1>
                <form action="/filterKas" method="get" class="mb-4">
                <input type="date" name="tgl_awal" id="tgl_awal" class="border rounded px-2 py-1">
                <label for="">To:</label>
                <input type="date" name="tgl_akhir" id="tgl_akhir" class="border rounded px-2 py-1">
                <button type="submit"
                    class="bg-kuning hover:bg-sudah text-black hover:text-white ml-2 px-4 py-1.5 rounded">Filter</button>
            </form>
            </div>
            <div class="bg-white border-t-[6px] border-sudah rounded-[4px]">
                <table class="w-full text-sm text-left">
                    <thead>
                        <tr class="border-b-2">
                            <th scope="col" class="pt-6 pb-2 px-2 w-24 ">Kode Arus</th>
                            <th scope="col" class="pt-6 pb-2 px-2">Nama Aktivitas</th>
                            <th scope="col" class="pt-6 pb-2 px-2">Arus</th>
                            <th scope="col" class="pt-6 pb-2 px-2">Total </th>
                            <th scope="col" class="pt-6 pb-2 px-2">Saldo</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($arus as $item)
                            <tr>
                                <td class="px-2 w-40 text-md font-bold uppercase">
                                    <p class="text-sudah">{{ $item->kode }}</p>
                                </td>
                                <td class="px-2 text-left ">
                                    <p class="">{{ $item->nama }}</p>
                                </td>
                                <td class="px-2 text-left  ">
                                    <p class="">{{ $item->arus }}</p>
                                </td>
                                <td class="px-2 text-left ">
                                    <p class="">Rp. {{ $item->total }}</p>
                                </td>
                                <td class="px-2 text-left ">
                                    <p class="">Rp. {{ $item->saldo }}</p>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
