@extends('layout.index')
@section('content')
    <div class="p-4 mt-10 sm:ml-72 flex flex-col sm:flex-row place-content-between">
        <div class="p-4 drop-shadow-lg w-screen">
            <div class="bg-white px-3 border-t-[6px] border-sudah rounded-[4px]">
                <h2 class="font-medium pt-4 py-1">Tambah Artikel</h2>
                <form action="/storeArtikel" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3 border-t-2 pt-2">
                        <label for="judul" class="block">Judul Artikel:</label>
                        <input type="text" id="judul" name="judul" class="border rounded-md w-full px-2 py-0.5">
                    </div>
                    <div class="mb-3">
                        <label for="Isi" class="block">Isi Artikel</label>
                        <textarea  type="text" id="Isi" name="Isi" class="tinymce-editor border rounded-md w-full px-2 "></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="foto" class="block">Gambar</label>
                        <input type="file" name="foto" id="foto" class="border rounded-md">
                    </div>
                    <div class="flex py-2">
                        <button type="submit" class="px-3 py-1 bg-green-500 text-white rounded-md mr-2">Simpan</button>
                        {{-- <a href="#" class="px-3 py-1 bg-red-500 text-white rounded-md">Batal</a> --}}
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
                        @foreach ($artikel as $data)
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
