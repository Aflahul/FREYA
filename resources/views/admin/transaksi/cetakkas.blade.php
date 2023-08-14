<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title id="page-title">Freya Laundry</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="{{ asset('asset/css/fontawesome.css') }}" rel="stylesheet">
    <script src="{{ asset('asset/tinymce/js/tinymce/tinymce.min.js') }}"></script>
    <link href="{{ asset('asset/css/all.css') }}" rel="stylesheet">
</head>

<body class="h-fit">
    <div class="flex flex-col gap-0.5">
        <div class="w-screen">
            <p class="text-center font-bold text-2xl text-gray-950">Laporan Arus Kas</p>
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
                </div>
                <div class="flex gap-3 ">
                    @php
                        $tgl_awalKAS = \Carbon\Carbon::parse(session('tgl_awalKAS'))->isoFormat('DD/MM/YYYY');
                        $tgl_akhirKAS = \Carbon\Carbon::parse(session('tgl_akhirKAS'))->isoFormat('DD/MM/YYYY');
                    @endphp
                    <table>
                        <tbody>
                            <tr class="">
                                <td>
                                    <p class="font-lg">Periode Tanggal</p>
                                </td>
                                <td>
                                    <p class="font-lg text-right">:
                                        <b>{{ $tgl_awalKAS }}</b>-<b>{{ $tgl_akhirKAS }}</b>
                                    </p>
                                </td>

                            </tr>

                            <tr class="">
                                <td>
                                    <p class="font-lg">Total Laba/Rugi </p>
                                </td>
                                <td>
                                    <p class="font-lg">: <b><u>Rp.{{ number_format($laba, 0, ',', '.') }}</u></b>
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
                                    Kode
                                </th>
                                <th scope="col" class="px-2 py-3">
                                    Tanggal
                                </th>
                                <th scope="col" class="px-2 py-3">
                                    Nama Aktivitas
                                </th>
                                <th scope="col" class="px-2 py-3">
                                    Arus
                                </th>
                                <th scope="col" class="pr-8 text-right py-3 rounded-tr-md">
                                    Total
                                </th>

                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($arus as $item)
                                <tr class="bg-white border-b ">
                                    <td class="px-4 py-1">
                                        {{ $loop->iteration }}
                                    </td>
                                    <td class="px-4 py-1">
                                        {{ $item->kode }}
                                    </td>
                                    <td class="flex w-fit px-4 py-1">
                                        <p>{{ $item->tgl }}</p>
                                    </td>
                                    <td class="px-4 py-1">
                                        {{ $item->nama }}
                                    </td>
                                    <td class="px-4 py-1">
                                        {{ $item->arus }}
                                    </td>
                                    <td class="pr-8 py-1 text-right" id="total harga">
                                        Rp. {{ number_format($item->total, 0, ',', '.') }}
                                    </td>
                                </tr>
                            @endforeach
                        <tfoot class="">
                            <tr class="bg-gray-100 ">
                                <td colspan="5" class="py-2 rounded-bl-md text-right px-4">
                                    <b>Total Laba/Rugi :</b>
                                </td>
                                <td class="py-2 text-right pr-8 rounded-br-md">
                                    <b> Rp. {{ number_format($laba, 0, ',', '.') }}</b>
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
