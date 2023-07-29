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
    <div class="flex flex-col gap-0.5">
        <div class="w-screen">
            <p class="text-center font-bold text-2xl text-gray-950">Laporan Pendapatan</p>
            <p class="text-center text-lg font-bold ">Freya Laundry</p>
        </div>
        <div class=" border-t">
            <div class="flex gap-5 text-left justify-between px-10 my-8">
                <div class="grid grid-cols-2 font-bold text-xl text-gray-950">
                    @if ($profil->logo)
                        <img class="h-14 rounded" src="{{ 'data:image/jpeg;base64,' . base64_encode($profil->logo) }}"
                            alt="logo">
                    @else
                        <img class="h-14 rounded" src="{{ asset('assets/img/default-logo.jpg') }}" alt="default logo">
                    @endif
                    {{-- <p class="text-left bg-black rounded-md px-2 py-5font-bold text-4xl text-white">Logo</p> --}}
                </div>
                <div class="flex gap-3 ">
                    @php
                        $tgl_awal = \Carbon\Carbon::parse(session('tgl_awal'))->isoFormat('DD/MM/YYYY');
                        $tgl_akhir = \Carbon\Carbon::parse(session('tgl_akhir'))->isoFormat('DD/MM/YYYY');
                    @endphp
                    <table>
                        <tbody>
                            <tr class="">
                                <td>
                                    <p class="font-lg">Periode Tanggal</p>
                                </td>
                                <td>
                                    <p class="font-lg text-right font-medium">: {{ $tgl_awal }}-{{ $tgl_akhir }}</p>
                                </td>

                            </tr>
                    
                            <tr class="">
                                <td>
                                    <p class="font-lg">Total Pendapatan </p>
                                </td>
                                <td>
                                    <p class="font-lg">: <b><u>Rp.{{ number_format($totalPendapatan, 0, ',', '.') }}</u></b>
                                    </p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="my-5 px-10">
                <div class="">
                    <table class="w-full text-sm text-left  text-gray-500 ">
                        <thead class="text-xs text-white rounded-t-md uppercase bg-gray-700 ">
                            <tr>
                                <th scope="col" class="px-2 py-3 rounded-tl-md">
                                    No
                                </th>
                                <th scope="col" class="px-2 py-3">
                                    Nama Layanan
                                </th>
                                <th scope="col" class="px-2 py-3">
                                    Harga Satuan
                                </th>
                                <th scope="col" class="px-2 py-3">
                                    Total Qty
                                </th>
                                <th scope="col" class="pr-8 text-right py-3 rounded-tr-md">
                                    Total Harga
                                </th>

                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($produk as $item)
                                <tr class="bg-white border-b ">
                                    <td class="px-4 py-1">
                                        {{ $loop->iteration }}
                                    </td>
                                    <td class="px-4 py-1">
                                        {{ $item->nama_layanan }}
                                    </td>
                                    <td class="flex justify-between w-24 px-4 py-1">
                                        <p>Rp.</p>
                                        <p>{{ number_format($item->harga, 0, ',', '.') }}</p>
                                    </td>
                                    <td class="px-4 py-1">
                                        {{ $item->total_order }} {{ $item->satuan }}
                                    </td>
                                    <td class="pr-8 py-1 text-right" id="total harga">
                                        Rp. {{ number_format($item->harga * $item->total_order, 0, ',', '.') }}
                                    </td>
                                </tr>
                            @endforeach
                        <tfoot class="">
                            <tr class="bg-gray-100 ">
                                <td colspan="4" class="py-2 rounded-bl-md text-right px-4">
                                    <b>Total Pendapatan :</b>
                                </td>
                                <td class="py-2 text-right pr-8 rounded-br-md">
                                    <b> Rp. {{ number_format($totalPendapatan, 0, ',', '.') }}</b>
                                </td>
                            </tr>
                        </tfoot>



                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script>
        window.print();
    </script>
</body>

</html>
