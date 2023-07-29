@extends('layout.index')

@section('content')
    <div class="p-4 mt-10 sm:ml-72 flex flex-col sm:flex-row place-content-between ">
        <div class="p-4 drop-shadow-lg w-fit ">
            <div class=" bg-white px-3 border-t-[6px] border-sudah rounded-[4px]">
                <h2 class="font-medium pt-4 py-1">Tambah Produk & Layanan</h2>
                <form action="/storeProduk" method="POST">
                    @csrf
                    <div class="mb-3 border-t-2 pt-2">
                        <label for="nama_layanan" class="block">Nama Layanan:</label>
                        <input type="text" id="nama_layanan" name="nama_layanan"
                            class="border rounded-md w-full px-2 py-0.5">
                    </div>
                    <div class="mb-3">
                        <label for="desk" class="block">Deskripsi:</label>
                        <input type="text" id="desk" name="desk"
                            class="border rounded-md w-full px-2 py-0.5 my-0.5">
                        <input type="text" id="desk2" name="desk2"
                            class="border rounded-md w-full px-2 py-0.5 my-0.5">
                        <input type="text" id="desk3" name="desk3"
                            class="border rounded-md w-full px-2 py-0.5 my-0.5">
                    </div>
                    <div class="mb-3 flex">
                        <div class="">
                            <label for="harga" class="block">Harga:</label>
                            <input type="number" id="harga" name="harga" class="border rounded-md w-full px-2 py-0.5"
                                min="1000" step="1000">
                        </div>
                        <div class="">
                            <label class="ml-2 block">/Unit:</label>
                            <div class="ml-2 flex">
                                <label class="inline-flex items-center mr-4">
                                    <input type="radio" name="satuan" value="Pcs" class="form-radio text-blue-500">
                                    <span class="ml-2">Pcs</span>
                                </label>
                                <label class="inline-flex items-center">
                                    <input type="radio" name="satuan" value="Kg" class="form-radio text-blue-500">
                                    <span class="ml-2">Kg</span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="durasi" class="block">Durasi:</label>
                        <div class="flex flex-row">
                            <input type="number" id="durasi" name="durasi" class="border rounded-md w-full px-2 py-0.5">
                            <span class="ml-2">Hari</span>
                        </div>
                    </div>

                    <div class="flex justify-end py-2">
                        <button type="submit" class="px-3 py-1 bg-green-500 text-white rounded-md mr-2">Tambahkan</button>
                    </div>
                </form>
            </div>
        </div>
        <!--layanan-->
        <div class="p-4 drop-shadow-lg w-screen overflow-x-auto">

            <div class="bg-white border-t-[6px] border-sudah rounded-[4px]">
                <table class="w-full text-sm text-left ">
                    <thead>
                        <tr class="border-b-2 w-fit text-base ">
                            <th scope="col" class="pt-4 pb-1 w-fit pl-2 ">Nama Layanan</th>
                            <th scope="col" class="pt-4 pb-1 ">Deskripsi</th>
                            <th scope="col" class="pt-4 pb-1 ">Durasi</th>
                            <th scope="col" class="pt-4 pb-1 ">Harga/Unit</th>
                            <th scope="col" class="pt-4 pb-1 text-center">Transaksi</th>
                            <th scope="col" class="pt-4 pb-1 ">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($produks as $data)
                            <tr class=" object-center ">
                                <td class="py-1 w-fit pl-2">
                                    <p class="font-bold text-sudah">{{ $data->nama_layanan }}</p>
                                </td>
                                <td class="text-left ">
                                    <p class="font-light text-xs">
                                        {{ \Illuminate\Support\Str::limit($data->desk, 5) }}
                                        {{ \Illuminate\Support\Str::limit($data->desk2, 5) }}
                                        {{ \Illuminate\Support\Str::limit($data->desk3, 5) }}
                                    </p>
                                </td>
                                <td class="pl-1 ">
                                    <p class="font-light text-xs">{{ $data->durasi }} Hari</p>
                                </td>
                                <td class="pl-1 ">
                                    <p class="font-light text-xs">Rp. {{number_format( $data->harga,0, ',', '.')  }} /{{ $data->satuan }}</p>
                                </td>
                                <td class="text-center">
                                    <p class="font-bold text-base">{{ $data->total_order }} {{ $data->satuan }}</p>
                                </td>
                                <form action="/deleteProduk/{{ $data->id_layanan }}" method="post">
                                    <td class="text-center py-2 text-belum flex gap-2 ">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" onclick="return confirm('Yakin ingin hapus data?')">
                                            <i class="fa-solid fa-trash-can fa-xl"></i>
                                        </button>
                                        <a href="/EditProduk/{{ $data->id_layanan }}">
                                            <i class="fa-solid fa-edit fa-xl"></i>
                                        </a>
                                    </td>
                                </form>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
