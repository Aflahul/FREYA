@extends('layout.index')
@section('content')
    <div class="fixed inset-0 flex justify-center bg-gray-900 bg-opacity-50">
        <div class="p-24 sm:ml-72">
            <div class="max-w-screen-sm mx-auto p-4 bg-white rounded-md border-blue-600">
                <h2 class="text-lg font-medium mb-4">Tambah Pengeluaran</h2>
                <form action="/storePengeluaran" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label for="kd_pengeluaran" class="block">Kode Pengeluaran:</label>
                        <input type="text" id="kd_pengeluaran" name="kd_pengeluaran" class="border rounded-md px-2 py-1">
                    </div>
                    <div class="mb-4">
                        <label for="pengeluaran" class="block">pengeluaran:</label>
                        <input type="text" id="pengeluaran" name="pengeluaran" class="border rounded-md px-2 py-1">
                    </div>
                    <div class="mb-4">
                        <label for="desk" class="block">desk:</label>
                        <input type="text" id="desk" name="desk" class="border rounded-md px-2 py-1">
                    </div>
                    <div class="mb-4">
                        <label for="waktu" class="block">waktu:</label>
                        <input type="datetime-local" id="waktu" name="waktu" class="border rounded-md px-2 py-1">
                    </div>
                    <div class="mb-4">
                        <label for="jumlah" class="block">jumlah:</label>
                        <input type="number" id="jumlah" name="jumlah" class="border rounded-md px-2 py-1">
                    </div>
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
