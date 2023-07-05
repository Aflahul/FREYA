@extends('layout.index')
@section('content')
    <div class="fixed inset-0 flex justify-center bg-gray-900 bg-opacity-50">
        <div class="p-24 sm:ml-72">
            <div class="max-w-screen-sm mx-auto p-4 bg-white rounded-md border-blue-600">
                <h2 class="text-lg font-medium mb-4">Tambah Pelanggan</h2>
                <form action="/storePelanggan" method="POST">
                    @csrf
                    <div class="mb-4">
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
                    <div class="flex justify-end">
                        <button type="submit" class="px-3 py-1 bg-green-500 text-white rounded-md mr-2">Simpan</button>
                        <a href="/pelanggan" class="px-3 py-1 bg-red-500 text-white rounded-md">Batal</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
