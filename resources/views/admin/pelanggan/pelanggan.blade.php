@extends('layout.index')

@section('content')
    <div class="p-4 mt-10 sm:ml-72 flex flex-col sm:flex-row place-content-between">
        
        <div class="p-4 drop-shadow-lg w-fit ">
            <div class=" bg-white px-3 border-t-[6px] border-sudah rounded-[4px]">
                <h2 class="font-medium pt-2 m-4">Tambah Pelanggan</h2>
            
                <form action="/storePelanggan" method="POST">
                    @csrf
                    <div class="mb-4 border-t-2 pt-2">
                        <label for="namapel" class="block">Nama Pelanggan:</label>
                        <input type="text" id="namapel" name="namapel" class="border rounded-md px-2 py-1">
                    </div>
                    <div class="mb-4">
                        <label for="kontak" class="block">kontak:</label>
                        <input type="text" id="kontak" name="kontak" class="border rounded-md px-2 py-1">
                    </div>

                    <div class="mb-4">
                        <label for="alamat" class="block">alamat:</label>
                        <input type="text" id="alamat" name="alamat" class="border rounded-md px-2 py-1">
                    </div>
                    <div class="flex justify-start py-2">
                        <button type="submit" class="px-3 py-1 bg-green-500 text-white rounded-md mr-2">Tambahkan</button>
                        {{-- <a href="/pelanggan" class="px-3 py-1 bg-red-500 text-white rounded-md">Batal</a> --}}
                    </div>
                </form>
            </div>
        </div>
        <!--pelanggan-->
        <div class="p-4 drop-shadow-lg w-screen overflow-x-auto">
            {{-- <div class="mb-3 px-3 flex items-center">
                <label for="rows" class="mr-2">Show :</label>
                <select id="rows" class="px-2 py-1 border rounded-[4px]">
                    <option value="5">5</option>
                    <option value="10">10</option>
                    <option value="15">15</option>
                </select>
                <label for="rows" class="ml-2">entries</label>
            </div> --}}
            <div class="bg-white px-3 border-t-[6px] border-sudah rounded-[4px]">
                <table class="w-full text-sm text-left overflow-x-auto ">
                    <thead>
                        <tr class="border-b-2 text-center text-base ">
                            <th></th>
                            <th scope="col" class="py-5 text-left">Pelanggan</th>
                            <th scope="col" class="py-5">Alamat</th>
                            {{-- <th scope="col" class="py-5">Sedang Cuci</th> --}}
                            <th scope="col" class="py-5">Total Order</th>
                            <th scope="col" class="py-5">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pelanggan as $data)
                            <tr class="object-center">
                                <td class="w-10 py-2">
                                    <div class="pl-4 text-sudah">
                                        <i class="fas fa-user-circle fa-2x"></i>
                                    </div>
                                </td>
                                <td class=" text-left px-2">
                                    <p class="font-bold text-sudah">{{ $data->namapel }}</p>
                                    <p class="font-light text-xs">{{ $data->kontak }}</p>
                                </td>
                                <td class="text-center">
                                    <p>{{ $data->alamat }}</p>
                                </td>
                                {{-- <td class="text-center">
                                    <p>{{ $data->sedang_cuci }}</p>
                                </td> --}}
                                <td class="text-center">
                                    <p class="font-bold text-base">{{ $data->total_order }}</p>
                                </td>
                                <form action="/deletePelanggan/{{ $data->id_pelanggan }}" method="post">
                                    <td class="py-2 text-center text-belum  flex gap-2">
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
