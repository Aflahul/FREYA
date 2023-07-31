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
    <style>
        /* Gaya untuk tampilan cetak */
        @media print {
            body {
                width: 210mm;
                height: fit-content;/* Lebar halaman cetak 8cm */

                /* Hapus padding untuk menghindari padding default */
            }
        }
    </style>
</head>

<body class="px-4 h-fit text-sm font-mono">
    <div class="flex justify-start w-full">
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
        <div class=" flex flex-col ml-3">
            <p class="text-md font-black text-gray-950">Bersih Rapi Wangi</p>
            <p class="items-center text-xs  text-slate-800"> <i class="fa-brands fa-whatsapp"></i>
                +{{ $profil->kontak }} | Siap Antar Jemput!!! </p>
            <p class="items-center text-xs  text-slate-800"> <i class="fa-solid fa-location-dot"></i>
                {{ $profil->alamat }}</p>
        </div>
    </div>
    <div class="mt-2 mb-0.5">
        <div class="w-screen border-t-2 border-b-2 border-dotted border-black ">
            <p class="text-gray-800 mt-1 bg-white px-5 text-center font-bold text-xl ">NOTA KONSUMEN :
                NT00<span>{{ $transaksi->id_order }}</span></p>
        </div>
    </div>
    <div class="w-screen flex gap-5 text-left justify-between ">
        <div class="flex flex-col basis-1/2">
            <p><i>{{ $tanggal }}, {{ $jam }}</i></p>
            <div class="flex flex-row">
                <div>
                    <p class=" ">Customer</p>
                    <p class=" ">Alamat</p>
                    <p class=" ">Kontak</p>
                </div>
                <div class="ml-2">
                    <p class=" ">: {{ $transaksi->pelanggan->namapel }}</p>
                    <p class=" w-full">: {{ $transaksi->pelanggan->alamat }}</p>
                    <p class=" ">: {{ $transaksi->pelanggan->kontak }}</p>
                </div>
            </div>

        </div>
        <div class="flex flex-col basis-1/2 ">
            <br>
            <div class="flex flex-row justify-end">
                <div>
                    <p class=" ">Kode Order</p>
                    <p class=" ">Kasir</p>
                    <p class=" ">Selesai</p>
                </div>
                <div class="ml-2">
                    <p class=" font-bold">: {{ $transaksi->kd_order }}</p>
                    <p class=" ">: {{ ucfirst(auth()->user()->username) }}</p>
                    <p class=" ">: <span>{{ $transaksi->estimasi_selesai->format('d/m/Y') }}</span></p>
                </div>
            </div>
        </div>
    </div>
    <div
        class="w-screen flex gap-5 text-left my-2 py-2 border-black border-t-2 border-b-2 border-dotted justify-between ">
        <div class="flex flex-col basis-1/2">
            <div class="flex flex-row">
                <div>
                    <P class="">Layanan <b>{{ $transaksi->produk->nama_layanan }} </b></P>
                </div>
                <div class="ml-2">
                    <p class="font-bold ">: {{ $transaksi->qty }} {{ $transaksi->produk->satuan }}</p>
                </div>
            </div>
        </div>
        <div class="flex flex-col basis-1/2 ">
            <div class="flex flex-row justify-end">
                <div>
                    <p class=" ">TOTAL </p>
                </div>
                <div class="ml-2">
                    <p class=" font-black">: Rp. {{ number_format($transaksi->total, 0, ',', '.') }}</p>
                </div>
            </div>
        </div>
    </div>
    <div class="w-screen">
        <div class="flex flex-row text-xs">
            <div class="flex flex-row ">
                <div class="w-fit">
                    <p class=" font-bold">Note! </p>
                </div>
                <div class="w-fit">
                    <p>-</p>
                    <p>-</p>
                    <p>-</p>
                </div>
            </div>
            <div class="">
                <div class="pl-2">Pengambilan barang harus memperlihatkan nota</div>
                <div class="pl-2">Kain luntur, berkerut karena sifat kain di luar tanggungan</div>
                <div class="pl-2">Cucian yang tidak diambil dalam waktu 2 Bulan bila rusak / hilang bukan
                    tanggungjawab kami</div>
            </div>
        </div>
        
    </div>
    <div class="w-screen ">
        <hr class="border-t-2 mt-0.5 border-dotted border-black ">
        <div class="text-center mt-1">
            <p class="text-sm font-bold text-gray-800">"Terima kasih atas kepercayaan anda"</p>
        </div>
    </div>

    <script>
        window.print();
    </script>
</body>

</html>
