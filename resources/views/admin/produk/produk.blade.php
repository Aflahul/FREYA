@extends('layout.index')

@section('content')
    <div class="p-4 mt-20 sm:ml-72">
        <div class="p-4 drop-shadow-lg relative overflow-x-auto">
        <a type="button" id="tambahProdukButton"
            class="flex items-center gap-3 bg-kuning hover:bg-yellow-500 font-medium rounded-xl text-sm px-4 py-2 w-fit"
            href="/createProduk">
            <i class="fa-solid fa-circle-plus"></i>
            <p>Tambah Produk</p>
        </a>
        </div>
        <!--layanan-->
        <div class="p-4 drop-shadow-lg relative overflow-x-auto">
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
                        <tr class="border-b-2 text-base ">
                            <th scope="col" class="px-2 py-5 ">Produk & Layanan</th>
                            <th scope="col" class="px-2 py-5 ">Deskripsi</th>
                            <th scope="col" class="px-2 py-5 text-right">Satuan</th>
                            <th scope="col" class="py-5 text-left">-</th>
                            <th scope="col" class="py-5 text-left">Harga</th>
                            <th scope="col" class="px-2 py-5">Total Transaksi</th>
                            <th scope="col" class="py-5 text-center">Aksi</th> 
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ( $produk as $data)
                        <tr class=" object-center">
                            <td class="px-2 py-4">
                                <p class="font-bold text-sudah">{{ $data->nama_layanan}}</p>
                            </td>
                            <td class="px-2 py-4 text-left ">
                                <p class="font-light text-xs">{{ $data->desk}}</p>
                            </td>
                            <td class="px-2 py-4 text-right ">
                                <p class="font-light text-xs">{{ $data->satuan}}</p>
                            </td>
                            <td class="py-4 text-center ">
                                <p class="font-light text-xs">-</p>
                            </td>
                            <td class="py-4 text-left ">
                                <p class="font-light text-xs">{{ $data->harga}}</p>
                            </td>
                            <td class="px-2">
                                <p class="font-bold text-base">99</p>
                            </td>
                            <td class="text-center text-belum">
                                <i class="fa-solid fa-trash-can fa-xl"></i>
                                <i class="fa-solid fa-edit fa-xl"></i>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
