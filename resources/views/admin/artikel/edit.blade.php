{{-- @extends('layout.index')
@section('content')
    <div class="fixed inset-0 flex justify-center bg-gray-900 bg-opacity-50">
        <div class="p-24 sm:ml-72">
            <div class="max-w-screen-sm mx-auto p-4 bg-white rounded-md border-blue-600">
                <h2 class="text-lg font-medium mb-4">Edit Artikel</h2>
                <form action="{{ route('UpdateArtikel.update', $artikel->id_artikel) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-4">
                        <label for="judul" class="block">Nama Artikel:</label>
                        <input type="text" id="judul" name="judul" value="{{ old('judul', $artikel->judul) }}"
                            class="border rounded-md px-2 py-1">
                    </div>
                    <div class="mb-4">
                        <label for="Isi" class="block">Isi:</label>
                        <input type="text" id="Isi" name="Isi" value="{{ old('Isi', $artikel->Isi) }}"
                            class="border rounded-md px-2 py-1">
                    </div>
                    <div class="mb-4">
                        <label for="status" class="block">status:</label>
                        <input type="text" id="status" name="status" value="{{ old('status', $artikel->status) }}"
                            class="border rounded-md px-2 py-1">
                    </div>
                    </div>
                    <div class="mb-4">
                        <label for="foto" class="block">foto:</label>
                        <input type="text" id="foto" name="foto" value="{{ old('foto', $artikel->foto) }}"
                            class="border rounded-md px-2 py-1">
                    </div>
                    </div>
                    <div class="flex justify-end">
                        <button type="submit" class="px-3 py-1 bg-green-500 text-white rounded-md mr-2">Simpannn</button>
                        <a href="/artikel" class="px-3 py-1 bg-red-500 text-white rounded-md">Batal</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection --}}
@extends('layout.index')

@section('content')
    <div class="p-4 mt-20 sm:ml-72 flex flex-col sm:flex-row place-content-between">
        <div class="p-4 drop-shadow-lg w-fit">
            <div class="bg-white px-3 border-t-[6px] border-sudah rounded-[4px]">
                <h2 class="font-medium pt-4 py-1">Tambah Artikel</h2>
                <form action="{{ route('UpdateArtikel.update', $artikel->id_artikel) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3 border-t-2 pt-2">
                        <label for="judul" class="block">Judul Artikel:</label>
                        <input type="text" id="judul" name="judul" value="{{ old('judul', $artikel->judul) }}" class="border rounded-md w-full px-2 py-0.5">
                    </div>
                    <div class="mb-3">
                        <label for="Isi" class="block">Isi Artikel</label>
                        <input type="text" id="Isi" name="Isi" class="border rounded-md w-full px-2 " value="{{ old('judul', $artikel->Isi) }}">
                    </div>
                    <div class="mb-3">
                        <label for="foto" class="block">Gambar</label>
                        <input type="file" name="foto" id="foto" class="border rounded-md" value="{{ old('judul', $artikel->foto) }}">
                    </div>
                    <div class="flex py-2">
                        <button type="submit" class="px-3 py-1 bg-green-500 text-white rounded-md mr-2">Simpan</button>
                        <a href="/artikel" class="px-3 py-1 bg-red-500 text-white rounded-md">Batal</a>
                    </div>
                </form>

            </div>
        </div>
        <!--Artikel-->
        <div class="p-4 drop-shadow-lg w-screen overflow-x-auto">
            <div class="bg-white border-t-[6px] border-sudah rounded-[4px]">
                <table class="w-full text-sm text-left ">
                    <thead>
                        <tr class="border-b-2 text-semibold ">
                            <th scope="col" class="px-2 py-5 ">Gambar</th>
                            <th scope="col" class="px-2 py-5 ">Judul Artikel</th>
                            <th scope="col" class="px-2 py-5">Waktu</th>
                            <th scope="col" class="pr-4 py-5 text-left">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($artikels as $data)
                            <tr class="">
                                <td class="px-2 py-2 max-h-5 max-w-5 rounded">
                                    @if ($data->foto)
                                        <img class="max-h-5 max-w-5" src="{{ asset('storage/' . $data->foto) }}"
                                            alt="logo">
                                    @else
                                        <img class="max-h-5 max-w-5" src="{{ asset('assets/img/default-img.jpg') }}"
                                            alt="default logo">
                                    @endif
                                </td>
                                <td class="px-2 py-2">
                                    <p class="font-semibold text-sudah">{{ $data->judul }}</p>
                                </td>
                                <td class="px-2 py-2">
                                    <p>{{ $data->created_at }}</p>
                                </td>
                               <div class="place-content-end">
                                    <form action="/deleteArtikel/{{ $data->id_artikel }}" method="post">
                                        <td class="py-2 text-center text-belum flex gap-2">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" onclick="return confirm('Yakin ingin hapus data?')">
                                                <i class="fa-solid fa-trash-can fa-xl"></i>
                                            </button>
                                            <a href="/EditArtikel/{{ $data->id_artikel }}">
                                                <i class="fa-solid fa-edit fa-xl"></i>
                                            </a>
                                        </td>
                                    </form>
                                </div>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

