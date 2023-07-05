@extends('layout.index')

@section('content')
    <div class="p-4 mt-20 sm:ml-72  ">
        <div class="p-4 drop-shadow-lg relative overflow-x-auto">
        <a type="button" id="tambahPelangganButton"
            class="flex items-center gap-3 bg-kuning hover:bg-yellow-500 font-medium rounded-xl text-sm px-4 py-2 w-fit"
            href="/createPelanggan">
            <i class="fa-solid fa-circle-plus"></i>
            <p>Tambah Pelanggan</p>
        </a>
        </div>
        <!--pelanggan-->
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
                <table class="w-full text-sm text-left overflow-x-auto ">
                    <thead>
                        <tr class="border-b-2 text-center text-base ">
                            <th></th>
                            <th scope="col" class="py-5 text-left">Pelanggan</th>
                            <th scope="col" class="py-5">Alamat</th>
                            <th scope="col" class="py-5">Sedang Cuci</th>
                            <th scope="col" class="py-5">Total Transaksi</th>
                            <th scope="col" class="py-5">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pelanggan as $data)
                            <tr class="object-center">
                                <td class="w-10 py-4">
                                    <div class="pl-4 text-sudah">
                                        <i class="fas fa-user-circle fa-3x"></i>
                                    </div>
                                </td>
                                <td class="py-4 text-left px-2">
                                    <p class="font-bold text-sudah">{{ $data->namapel }}</p>
                                    <p class="font-light text-xs">{{ $data->kontak }}</p>
                                </td>
                                <td class="text-center">
                                    <p>{{ $data->alamat }}</p>
                                </td>
                                <td class="text-center">
                                    <p>{{ $data->sedang_cuci ? 'Ya' : 'Tidak' }}</p>
                                </td>
                                <td class="text-center">
                                    <p class="font-bold text-base">{{ $data->total_cuci }}</p>
                                </td>
                                <form action="/deletePelanggan/{{ $data->id_pelanggan }}" method="post">
                                    <td class="py-2 text-center text-belum flex gap-2">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" onclick="return confirm('Yakin ingin hapus data?')">
                                            <i class="fa-solid fa-trash-can fa-xl"></i>
                                        </button>
                                        <a href="/EditPelanggan/{{ $data->id_pelanggan }}">
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
