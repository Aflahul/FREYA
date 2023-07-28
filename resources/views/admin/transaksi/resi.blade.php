<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Cetak Resi</title>
    <link rel="shortcut icon" href="img/uncok.png" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="stylesheet" href="style.css" />
    
    <link href="https://unpkg.com/intro.js/minified/introjs.min.css" rel="stylesheet">
    <link href="https://unpkg.com/intro.js/themes/introjs-modern.css" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@600&family=Lato&family=Roboto:ital,wght@0,400;1,500&display=swap"
        rel="stylesheet" />
    <style>
        #loader {
            display: none;
        }
    </style>
    <!--intro JS-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/intro.js/5.1.0/introjs.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intro.js/5.1.0/intro.min.js"></script>
    <!-- Google reCAPTCHA CDN -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
    <script src="https://cdn.tailwindcss.com?plugins=line-clamp"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
    @vite('resources/css/app.css')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.js"></script>
    <style>
        @media print {
            body {
                width: 210mm;
                height: 297mm;
                margin: auto;
            }
        }
    </style>
</head>
<body>
    <div class="pl-10">
        <p class="font-bold text-xl text-gray-950">
            LOGO
        </p>
        <p class="text-xs font-medium text-gray-950">Bersih Rapi Wangi</p>
    </div>
    <div class="my-4">
        <div class="w-full flex items-center h-7 bg-amber-400 justify-end">
            <p class="text-gray-800 bg-white px-5 text-right mr-14 font-semibold text-2xl ">KODE RESI : NT00<span>{{ $transaksi->id_order }}</span></p>
        </div>
    </div>




    </div>
    <div class="px-10 flex items-center">
        <div class="rounded-full text-left w-fit h-auto border bg-gray-100 pl-2 p-0.5">
            <p>Kode Order: {{ $transaksi->kd_order }}</p>
        </div>
        <div class="ml-5">
            <p class="text-base font-semibold text-slate-800">Siap Antar Jemput!!! | wa: 082296690898</p>
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
                <p>: {{ $transaksi->namapel }}</p>
                <p>: {{ $transaksi->alamat }}</p>
                <p>: {{ $transaksi->kontak }}</p>
            </div>
        </div>
        <div class="grid grid-cols-5 gap-2 text-left">
            <div class="col-span-2">
                <p>Tgl Masuk</p>
                <p>Tgl Selesai</p>
                {{-- <p>Pembayaran</p> --}}
            </div>
            <div class="col-span-3">
                <p>: <span>{{ $transaksi->created_at }}</span></p>
                <p>: <span>{{ $transaksi->updated_at }}</span></p>
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
                        <th scope="col" class="px-6 py-3">
                            Layanan
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Qty
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Satuan
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Hrg.Satuan
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Jumlah (Rp)
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-white border-b ">
                        <th scope="row"
                            class="px-4 py-4 font-medium border-b-white text-gray-900 whitespace-nowrap ">
                            1
                        </th>
                        <td class="px-6 py-4">
                            {{ $transaksi->nama_layanan }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $transaksi->qty }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $transaksi->satuan }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $transaksi->harga }}
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
                <div class="pl-2">Pengambilan barang harus disertai nota</div>
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
                    <p class="text-base font-bold"> Rp. <span>{{ $transaksi->total }}</span></p>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-10">
        <hr class="border-[3px] border-opacity-100 border-amber-400 my-0 w-full">
        <div class="text-center mt-2">
            <p class="text-xl font-bold text-gray-800">"Terima kasih atas kepercayaan anda"</p>
        </div>
    </div>

    <script>
        window.print();
    </script>
</body>

</html>
