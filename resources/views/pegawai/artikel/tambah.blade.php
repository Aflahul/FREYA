@extends('layout.index')
@section('content')
    <div class="fixed inset-0 flex justify-center bg-gray-900 bg-opacity-50">
        <div class="p-24 sm:ml-72">
            <div class="max-w-screen-sm mx-auto p-4 bg-white rounded-md border-blue-600">
                <h2 class="text-lg font-medium mb-4">Tambah Artikel</h2>
                <form action="/storeArtikel" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label for="judul" class="block">Judul Artikel:</label>
                        <input type="text" id="judul" name="judul" class="border rounded-md px-2 py-1">
                    </div>
                    <div class="mb-4">
                        <label for="Isi" class="block">Isi:</label>
                        <input type="text" id="Isi" name="Isi" class="border rounded-md px-2 py-1">
                    </div>
                    <div class="mb-4">
                        <label for="waktu" class="block">Waktu:</label>
                        <input type="date" id="waktu" name="waktu" class="border rounded-md px-2 py-1"
                            value="{{ date('Y-m-d') }}">
                    </div>
                    <div class="mb-4">
                        <label for="status" class="block">status:</label>
                        <input type="text" id="status" name="status" class="border rounded-md px-2 py-1">
                    </div>
                    <div class="mb-4">
                        <label for="foto" class="block">Foto:</label>
                        <div class="border rounded-md px-2 py-1">
                            <div class="relative flex items-center pl-2">
                                <input type="file" id="foto" name="foto" accept="image/*"
                                    class="absolute  inset-0 opacity-0 w-full h-full">
                                <span class="mr-2 text-gray-500"><i class="fas fa-image"></i></span>
                                <span>Upload Gambar</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-end">
                        <button type="submit" class="px-3 py-1 bg-green-500 text-white rounded-md mr-2">Simpan</button>
                        <a href="/artikel" class="px-3 py-1 bg-red-500 text-white rounded-md">Batal</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
