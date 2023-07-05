@extends('layout.index')
@section('content')
    <div class="fixed inset-0 flex justify-center bg-gray-900 bg-opacity-50">
        <div class="p-24 sm:ml-72">
            <div class="max-w-screen-sm mx-auto p-4 bg-white rounded-md border-blue-600">
                <h2 class="text-lg font-medium mb-4">Tambah Produk & Layanan</h2>
                <form action="/storeProduk" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label for="nama_layanan" class="block">Nama Layanan:</label>
                        <input type="text" id="nama_layanan" name="nama_layanan" class="border rounded-md px-2 py-1">
                    </div>
                    <div class="mb-4">
                        <label for="desk" class="block">Deskripsi:</label>
                        <input type="text" id="desk" name="desk" class="border rounded-md px-2 py-1">
                    </div>
                    <div class="mb-4">
                        <label for="satuan" class="block">satuan:</label>
                        <input type="text" id="satuan" name="satuan" class="border rounded-md px-2 py-1">
                    </div>
                    <div class="mb-4">
                        <label for="harga" class="block">harga:</label>
                        <input type="number" id="harga" name="harga" class="border rounded-md px-2 py-1">
                    </div>

                    <div class="flex justify-end">
                        <button type="submit" class="px-3 py-1 bg-green-500 text-white rounded-md mr-2">Simpannn</button>
                        <a href="/pengeluaran" class="px-3 py-1 bg-red-500 text-white rounded-md">Batal</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
