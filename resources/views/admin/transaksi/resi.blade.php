<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title id="page-title">Freya Laundry |</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="{{ asset('asset/css/fontawesome.css') }}" rel="stylesheet">
    <script src="{{ asset('asset/tinymce/js/tinymce/tinymce.min.js') }}"></script>
    <link href="{{ asset('asset/css/all.css') }}" rel="stylesheet">
</head>
<body class="h-fit">
    <div class="">
        <div class="flex justify-start gap-3">
            <div class="">
                <p class="font-bold text-xl text-gray-950">
                    @if ($profil->logo)
                        <img class="h-14 rounded" src="{{ 'data:image/jpeg;base64,' . base64_encode($profil->logo) }}"
                            alt="logo">
                    @else
                        <img class="h-14 rounded" src="{{ asset('assets/img/default-logo.jpg') }}" alt="default logo">
                    @endif
                </p>
            </div>
            <div class=" flex flex-col">
                <p class="text-xl font-medium text-gray-950">Bersih Rapi Wangi</p>
                <p class="text-base font-semibold text-slate-800">Siap Antar Jemput!!! | : +{{ $profil->kontak }}</p>
            </div>
        </div>
    <div class="my-4">
        <div class="w-full flex items-center h-7 bg-amber-400 justify-end">
            <p class="text-gray-800 bg-white px-5 text-right mr-14 font-semibold text-2xl ">KODE RESI :
                NT00<span>{{ $transaksi->id_order }}</span></p>
        </div>
    </div>
    </div>
    <div class="flex gap-5 text-left justify-between px-10 my-8">
        <div class="grid grid-cols-5 gap-2">
            <div>
                <p>Nama</p>
                <p>Alamat</p>
                <p>No. HP</p>
            </div>
            <div class="col-span-4">
                <p>: {{ $transaksi->pelanggan->namapel }}</p>
                <p>: {{ $transaksi->pelanggan->alamat }}</p>
                <p>: {{ $transaksi->pelanggan->kontak }}</p>
            </div>
        </div>
        <div class="grid grid-cols-5 gap-2 text-left">
            <div class="col-span-2">
                <p>Tgl Masuk</p>
                <p>Tgl Selesai</p>
                {{-- <p>Pembayaran</p> --}}
            </div>
            <div class="col-span-3">
                <p>: <span>{{ $transaksi->created_at->format('d/m/Y') }}</span></p>
                <p>: <span>{{ $transaksi->updated_at->format('d/m/Y') }}</span></p>
                {{-- <p>: <span>Tunai / Transfer</span></p> --}}
            </div>
        </div>
    </div>
    <div class="my-5 px-10">
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg border">
            <table class="w-full text-sm text-left text-gray-500 ">
                <thead class="text-xs text-white uppercase bg-gray-700 ">
                    <tr>
                        <th scope="col" class="px-4 py-3">
                            No
                        </th>
                        <th scope="col" class="px-2 py-3">
                            Layanan
                        </th>
                        <th scope="col" class="px-2 py-3">
                            Qty
                        </th>
                        <th scope="col" class="px-2 py-3">
                            Harga Satuan
                        </th>
                        <th scope="col" class="px-2 py-3">
                            Jumlah (Rp)
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-white border-b ">
                        <td class="px-4 py-4 font-medium border-b-white text-gray-900 whitespace-nowrap ">
                            1
                        </td>
                        <td class="px-6 py-4">
                            {{ $transaksi->produk->nama_layanan }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $transaksi->qty }} {{ $transaksi->produk->satuan }}
                        </td>
                        <td class="px-6 py-4">
                            Rp. {{ number_format($transaksi->produk->harga,0, ',', '.') }}/{{ $transaksi->produk->satuan }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $transaksi->total }}
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="px-10 grid grid-cols-5 ">
        <div class="col-span-3 pr-3 font-medium text-sm">
            <p class="text-base font-semibold">Note!</p>
            <div class="flex">
                <div>-</div>
                <div class="pl-2">Pengambilan barang harus memperlihatkan nota</div>
            </div>
            <div class="flex">
                <div>-</div>
                <div class="pl-2">Kain luntur, berkerut karena sifat kain di luar tanggungan</div>
            </div>
            <div class="flex">
                <div>-</div>
                <div class="pl-2">Cucian yang tidak diambil dalam waktu 2 Bulan bila rusak / hilang bukan
                    tanggungjawab kami</div>
            </div>
        </div>
        <div class="col-span-2 grid grid-cols-2">
            <div class="text-sm font-medium">
                <div class="bg-amber-400 w-full h-8 flex items-center pl-5 mt-2">
                    <p class="text-base font-bold">TOTAL </p>
                </div>
            </div>
            <div class="text-sm font-medium">
                <div class="bg-amber-400 w-full h-8 items-center mt-2">
                    <p class="text-base font-bold"> Rp. <span>{{ number_format($transaksi->total,0, ',', '.') }}</span></p>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-10">
        <hr class="border-[3px] border-opacity-100 border-amber-400 my-0 ">
        <div class="text-center mt-2">
            <p class="text-xl font-bold text-gray-800">"Terima kasih atas kepercayaan anda"</p>
        </div>
    </div>

    <script>
        window.print();
    </script>
</body>

</html>
