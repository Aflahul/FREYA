@extends('layout.index')
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
@endsection
