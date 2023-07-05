@extends('layout.index')

@section('content')
    <div class="p-4 mt-20 sm:ml-72">
        <div class="p-4 drop-shadow-lg relative overflow-x-auto">
            <a type="button" id="tambahArtikelButton"
                class="flex items-center gap-3 bg-kuning hover:bg-yellow-500 font-medium rounded-xl text-sm px-4 py-2 w-fit"
                href="/createArtikel">
                <i class="fa-solid fa-circle-plus"></i>
                <p>Tambah Artikel</p>
            </a>
        </div>
        <!--Artikel-->
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
                        <tr class="border-b-2 text-semibold ">
                            <th scope="col" class="px-2 py-5 "></th>
                            <th scope="col" class="px-2 py-5 ">Judul Artikel</th>
                            <th scope="col" class="px-2 py-5 ">Isi</th>
                            <th scope="col" class="px-2 py-5">Waktu</th>
                            <th scope="col" class="px-2 py-5">Status</th>
                            <th scope="col" class="px-2 py-5 text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($artikel as $data)
                            <tr class="">
                                <td class="px-2 py-2 max-h-5 max-w-5 rounded">
                                    <p class="">{{ $data->foto }}</p>
                                </td>
                                <td class="px-2 py-2">
                                    <p class="font-semibold text-sudah">{{ $data->judul }}</p>
                                </td>
                                <td class="px-2 py-2 text-left ">
                                    <p class="font-light text-xs">{{ $data->Isi }}</p>
                                </td>
                                <td class="px-2 py-2">
                                    <p>{{ $data->waktu }}</p>
                                </td>
                                <td class="px-2 py-2">
                                    <p>{{ $data->status }}</p>
                                </td>
                                <td class="py-2 text-center text-belum">
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
