@extends('layout.index')

@section('content')
    <div class="p-4 mt-10 sm:ml-72 flex flex-col sm:flex-row place-content-between ">
        <div class="p-4 drop-shadow-lg w-fit ">
            <div class=" bg-latar px-3 border-t-[6px] border-sudah rounded-[4px]">
                <h2 class="font-medium pt-4 py-1">Edit Produk & Layanan</h2>
                <form action="/UpdateProduk/{{ $produk->id_layanan }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3 border-t-2 pt-2">
                        <label for="nama_layanan" class="block">Nama Layanan:</label>
                        <input type="text" id="nama_layanan" name="nama_layanan"
                            class="border rounded-md w-full px-2 py-0.5"
                            value="{{ old('nama_layanan', $produk->nama_layanan) }}">
                    </div>
                    <div class="mb-3">
                        <label for="desk" class="block">Deskripsi:</label>
                        <input type="text" id="desk" name="desk"
                            class="border rounded-md w-full px-2 py-0.5 my-0.5" value="{{ old('desk', $produk->desk) }}">
                        <input type="text" id="desk2" name="desk2"
                            class="border rounded-md w-full px-2 py-0.5 my-0.5" value="{{ old('desk2', $produk->desk2) }}">
                    </div>
                    <div class="mb-3 flex">
                        <div class="">
                            <label for="harga" class="block">Harga:</label>
                            <input type="number" id="harga" name="harga" class="border rounded-md w-full px-2 py-0.5"
                                value="{{ old('harga', $produk->harga) }}" min="1000" step="1000">
                        </div>
                        <div class="">
                            <label class="ml-2 block">/Unit:</label>
                            <div class="ml-2 flex">
                                <label class="inline-flex items-center mr-4">
                                    <input type="radio" name="satuan" value="Pcs" class="form-radio text-blue-500"
                                        {{ old('satuan', $produk->satuan) === 'Pcs' || !$produk->satuan ? 'checked' : '' }}>
                                    <span class="ml-2">Pcs</span>
                                </label>
                                <label class="inline-flex items-center">
                                    <input type="radio" name="satuan" value="Kg" class="form-radio text-blue-500"
                                        {{ old('satuan', $produk->satuan) === 'Kg' ? 'checked' : '' }}>
                                    <span class="ml-2">Kg</span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="durasi" class="block">Durasi:</label>
                        <input type="number" id="durasi" name="durasi" class="border rounded-md w-full px-2 py-0.5"
                            value="{{ old('durasi', $produk->durasi) }}">
                    </div>
                    <div class="flex justify-end py-2">
                        <button type="submit" class="px-3 py-1 bg-green-500 text-white rounded-md mr-2">Simpan</button>
                        <a href="/produk" class="px-3 py-1 bg-red-500 text-white rounded-md">Batal</a>
                    </div>
                </form>
            </div>
        </div>
        <!--layanan-->
        <div class="p-4 drop-shadow-lg w-screen overflow-x-auto">

            <div class="bg-latar border-t-[6px] border-sudah rounded-[4px]">
                <table class="w-full text-sm text-left ">
                    <thead>
                        <tr class="border-b-2 text-base ">
                            <th scope="col" class="pt-4 pb-1 pl-2 ">Nama Layanan</th>
                            <th scope="col" class="pt-4 pb-1 ">Deskripsi</th>
                            <th scope="col" class="pt-4 pb-1 ">Durasi</th>
                            <th scope="col" class="pt-4 pb-1 ">Harga/Satuan</th>
                            <th scope="col" class="pt-4 pb-1">Transaksi</th>
                            <th scope="col" class="pt-4 pb-1 pr-1 text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($produks as $data)
                               <tr class=" odd:bg-slate-200 even:bg-latar ">
                                <td class="px-2 py-1">
                                    <p class="font-bold text-sudah">{{ $data->nama_layanan }}</p>
                                </td>
                                <td class="text-left ">
                                    <p class="font-light text-xs">
                                        {{ \Illuminate\Support\Str::limit($data->desk, 10) }}
                                    </p>
                                    <p class="font-light text-xs">
                                        {{ \Illuminate\Support\Str::limit($data->desk2, 10) }}
                                    </p>
                                </td>
                                <td class="px-1 text-left ">
                                    <p class="font-light text-xs">{{ $data->durasi }} Hari</p>
                                </td>
                                <td class="text-center ">
                                    <p class="font-light text-xs">Rp. {{ $data->harga }} /{{ $data->satuan }}</p>
                                </td>
                                <td class="px-2">
                                    <p class="font-bold text-base">{{ number_format($data->total_order, 0, '.', ',') }} {{ $data->satuan }}</p>
                                </td>
                                <form action="/deleteProduk/{{ $data->id_layanan }}" method="post">
                                    <td class="py-2 text-center text-belum flex gap-2 ">
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
