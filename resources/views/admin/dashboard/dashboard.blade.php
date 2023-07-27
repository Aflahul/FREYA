@extends('layout.index')

@section('content')
    <div class="p-3 mt-1 sm:ml-[17rem]">
        <div class="px-4 mb-1 mt-10">
            <span class="py-1 rounded justify-end text-xs"><i>{{ $tanggal }}</i></span>
            <p class="pb-4 font-normal ">Hi! <b><i>Admin,</i></b> Selamat datang</p>
            <hr>
        </div>
        <div class="px-4 flex gap-3 mt-3 ">
            <div class="w-2/3">
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-5 mb-3">
                    <div class="overflow-x-auto bg-card rounded-[8px] border-t drop-shadow">
                        <div class="flex flex-col justify-between p-2 md:flex-row">
                            <div class="w-full p-3 md:w-auto bg-kuning md:rounded-[3px]">
                                <div class="w-11 py-3 flex justify-center text-garis mx-auto">
                                    <div>
                                        <i class="fa-solid fa-users fa-2x"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center flex flex-col justify-between md:text-right">
                                <h5 class="text-2xl font-bold tracking-tight pt-1">{{ count($pelanggan) }}</h5>
                                <p class="font-normal">Pelanggan</p>
                            </div>
                        </div>
                    </div>
                    <div class="overflow-x-auto bg-card rounded-[8px] border-t drop-shadow">
                        <div class="flex flex-col justify-between p-2 md:flex-row">
                            <div class="w-full p-3 md:w-auto bg-kuning md:rounded-[3px]">
                                <div class="w-11 py-3 flex justify-center text-garis mx-auto">
                                    <div>
                                        <i class="fa-solid fa-tags fa-2x "></i>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center flex flex-col justify-between md:text-right">
                                <h5 class="text-2xl font-bold tracking-tight pt-1">{{ count($produk) }}</h5>
                                <p class="font-normal">Layanan</p>
                            </div>
                        </div>
                    </div>
                    <div class="overflow-x-auto bg-card rounded-[8px] border-t drop-shadow">
                        <div class="flex flex-col justify-between p-2 md:flex-row">
                            <div class="w-full p-3 md:w-auto bg-kuning md:rounded-[3px]">
                                <div class="w-11 py-3 flex justify-center text-garis mx-auto">
                                    <div>
                                        <img src="asset\icn\aa.png" class="min-h-[2rem] max-h-[2rem]" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="text-center flex flex-col justify-between md:text-right">
                                <h5 class="text-2xl font-bold tracking-tight pt-1">{{ count($proses) }}</h5>
                                <p class="font-normal">Proses</p>
                            </div>
                        </div>
                    </div>
                    <div class="overflow-x-auto bg-card rounded-[8px] border-t drop-shadow">
                        <div class="flex flex-col justify-between p-2 md:flex-row">
                            <div class="w-full p-3 md:w-auto bg-kuning md:rounded-[3px]">
                                <div class="w-11 py-3 flex justify-center text-garis mx-auto">
                                    <div>
                                        <i class="fa-solid fa-comments-dollar fa-2x"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center flex flex-col justify-between md:text-right">
                                <h5 class="text-2xl font-bold tracking-tight pt-1">1</h5>
                                <p class="font-normal">Income</p>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="drop-shadow overflow-x-auto mb-3">
                    <div class="bg-tabel  rounded-[8px]">
                        <table class="w-full text-sm text-left">
                            <thead class=" border-b-2 rounded-t-[8px] ">
                                <div
                                    class="px-4 pt-2 pb-1 flex justify-between items-center bg-white border-t-4 border-sudah rounded-t-[8px]">
                                    <h1 class="font-bold ">Data Order terbaru</h1>
                                </div>
                                <tr class="border-b-2">
                                    <th scope="col" class="pb-2 px-2">Pelanggan</th>
                                    <th scope="col" class="pb-2 px-2">Jenis Laundry</th>
                                    <th scope="col" class="pb-2 px-2">Waktu Masuk</th>
                                    <th scope="col" class="pb-2 px-2">Durasi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($proses->sortByDesc('created_at')->take(5) as $item)
                                    <tr>
                                        <td class="px-2 text-left ">
                                            <p class="font-base text-base">{{ $item->pelanggan->namapel }}</p>
                                        </td>
                                        <td class="px-2 text-left bg-selesai">
                                            <p class="">{{ $item->produk->nama_layanan }}</p>
                                        </td>
                                        <td class="px-2 text-left ">
                                            <p class="font-base text-base">{{ $item->created_at }}</p>
                                        </td>
                                        <td class="px-2 text-left bg-selesai">
                                            <p class=""><span>{{ $item->durasi }}</span> Hari</p>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="4"
                                        class="hover:bg-kuning text-center text-garis drop-shadow-lg  font-medium rounded-b-[8px] text-sm px-2 py-1">
                                        <a href="/laporan" class="" type="button">Lihat Semua</a>
                                    </td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
                <div class="drop-shadow overflow-x-auto">
                    <div class="bg-tabel  rounded-[8px]">
                        <table class="w-full text-sm text-left">
                            <thead class=" border-b-2 rounded-t-[8px] ">
                                <div
                                    class="px-4 pt-2 pb-1 flex justify-between items-center bg-white border-t-4 border-sudah rounded-t-[8px]">
                                    <h1 class="font-bold ">Arus Kas terakhir</h1>
                                </div>
                                <tr class=" ">
                                    <th scope="col" class="px-6 py-2">
                                        Tanggal
                                    </th>
                                    <th scope="col" class="px-6 py-2 text-center">
                                        Jenis Transaksi
                                    </th>
                                    <th scope="col" class="px-6 py-2 text-right">
                                        Total
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-latar">
                                        12/02/2023
                                    </th>
                                    <td class="px-6 py-4 text-center">
                                        Pengeluaran Listrik
                                    </td>
                                    <td class="px-6 py-4 text-right">
                                        Rp. 00000
                                    </td>
                                </tr>

                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="3"
                                        class="hover:bg-kuning text-center text-garis drop-shadow-lg  font-medium rounded-b-[8px] text-sm px-2 py-1">
                                        <a href="/laporan" class="" type="button">Lihat Semua</a>
                                    </td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
            <div class="w-1/3">
                <div class=" drop-shadow overflow-x-auto">
                    <div class="bg-tabel border-t-4 border-sudah rounded-[8px]">
                        <table class="w-full text-sm text-left ">
                            <thead>
                                <div class="p-4 border-b-2 flex justify-between items-center ">
                                    <h1 class="font-bold">Data Pelanggan</h1>
                                    <a href="/pelanggan"
                                        class="bg-kuning hover:bg-kuning drop-shadow-lg hover:text-white font-medium text-garis rounded-xl text-sm px-5 py-2">Lihat
                                        Semua</a>
                                </div>
                            </thead>
                            <tbody>
                                @foreach ($pelanggan->sortByDesc('created_at')->take(10) as $pel)
                                    <tr>
                                        <td class="w-8 ">
                                            <div class="pl-4">
                                                <i class="fas fa-user-circle fa-3x text-sudah"></i>
                                            </div>
                                        </td>
                                        <td class="text-left px-2">
                                            <p class="font-bold text-sudah text-base ">{{ $pel->namapel }}</p>
                                            <p class="font-light">{{ $pel->kontak }}</p>
                                        </td>
                                        <td class="py-0.5 text-right pr-4">
                                            <p class="font-light">Total Transaksi : {{ $pel->total_order }}</p>
                                            <p class="font-base text-base">{{ $pel->alamat }}</p>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    @endsection
