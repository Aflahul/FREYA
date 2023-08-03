@extends('layout.index')

@section('content')
    <div class="p-4 mt-10 sm:ml-72">
        <!--KAS-->
        <div class="px-4 pt-2 overflow-x-auto">
            <div class="mb-5  ">
                <h1 class="py-3">
                    Filter Tanggal
                </h1>
                @if ($errors->has('filtered_data'))
                    <div class="alert alert-danger bg-red-500 p-1 my-2 text-white rounded text-center">
                        {{ $errors->first('filtered_data') }}
                    </div>
                @endif
                <div class=" mb-3 w-full flex gap=5 items-center justify-between   ">
                    <div class="flex ">
                        <form action="/filterKas" method="get" class="">
                            <input type="date" name="tgl_awalKAS" id="tgl_awalKAS" class="border bg-latar rounded px-1 py-1">
                            <label for="">To:</label>
                            <input type="date" name="tgl_akhirKAS" id="tgl_akhirKAS" class="border rounded bg-latar px-1 py-1">
                            <button type="submit"
                                class="bg-kuning hover:bg-sudah text-black hover:text-white drop-shadow ml-2 px-4 py-1 rounded">Filter</button>

                            <a href="/resetfilter"
                                class="bg-sudah hover:bg-belum text-white hover:text-white drop-shadow ml-0.5 px-4 py-1 rounded"
                                type="submit">Reset
                            </a>


                        </form>

                    </div>
                    <div class="">
                        <a href="/cetakKas">
                            <div class="bg-sudah hover:text-black drop-shadow text-white px-4 py-1 h-fit rounded">Cetak Rekap Arus
                                <i class="fa-solid fa-print "></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="bg-latar border-t-[6px] border-sudah drop-shadow-lg rounded-[4px]">
                <table class="w-full text-sm text-left">
                    <thead>
                        <tr class="border-b-2">
                            <th scope="col" class="pt-6 pb-2 px-2 w-24 ">Kode Arus</th>
                            <th scope="col" class="pt-6 pb-2 px-2 ">Tanggal</th>
                            <th scope="col" class="pt-6 pb-2 px-2">Nama Aktivitas</th>
                                                    <th scope="col" class="pt-6 pb-2 px-2">Arus</th>
                            <th scope="col" class="pt-6 pb-2 px-2">Total </th>
                            <th scope="col" class="pt-6 pb-2 px-2">Saldo</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($arus->getCollection() as $item)
                            <tr class=" odd:bg-slate-200 even:bg-latar ">
                                <td class="px-2 w-40 text-md font-bold uppercase">
                                    <p class="text-sudah">{{ $item->kode }}</p>
                                </td>
                                <td class="px-2 text-left ">
                                    <p class="">{{ $item->tgl->format('d/m/Y') }}</p>
                                </td>
                                <td class="px-2 text-left ">
                                    <p class="">{{ $item->nama }}</p>
                                </td>
                                <td class="px-2 text-left  ">
                                    <p class="">{{ $item->arus }}</p>
                                </td>
                                <td class="px-2 text-left ">
                                    <p class="">Rp. {{number_format( $item->total,0, ',', '.')  }}</p>
                                </td>
                                <td class="px-2 text-left ">
                                    <p class="">Rp. {{number_format( $item->saldo,0, ',', '.')  }}</p>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>

                </table>
            </div>
        </div>
    </div>
@endsection
