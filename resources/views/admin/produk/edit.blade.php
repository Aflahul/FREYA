@extends('layout.index')
@section('content')
    <div class="fixed inset-0 flex justify-center bg-gray-900 bg-opacity-50">
        <div class="p-24 sm:ml-72">
            <div class="max-w-screen-sm mx-auto p-4 bg-white rounded-md border-blue-600">
                <h2 class="text-lg font-medium mb-4">Edit Produk</h2>
                <form action="{{ route('UpdateProduk.update', $pelanggan->id_pelanggan) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-4">
                        <label for="namapel" class="block">Nama Produk:</label>
                        <input type="text" id="namapel" name="namapel" value="{{ old('namapel', $pelanggan->namapel) }}"
                            class="border rounded-md px-2 py-1">
                    </div>
                    <div class="mb-4">
                        <label for="kontak" class="block">kontak:</label>
                        <input type="text" id="kontak" name="kontak" value="{{ old('kontak', $pelanggan->kontak) }}"
                            class="border rounded-md px-2 py-1">
                    </div>
                    <div class="mb-4">
                        <label for="alamat" class="block">alamat:</label>
                        <input type="text" id="alamat" name="alamat" value="{{ old('alamat', $pelanggan->alamat) }}"
                            class="border rounded-md px-2 py-1">
                    </div>
                    </div>
                    <div class="flex justify-end">
                        <button type="submit" class="px-3 py-1 bg-green-500 text-white rounded-md mr-2">Simpannn</button>
                        <a href="/pelanggan" class="px-3 py-1 bg-red-500 text-white rounded-md">Batal</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
