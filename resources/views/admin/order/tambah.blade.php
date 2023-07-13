@extends('layout.index')
@section('content')
    <div class="fixed inset-0 flex justify-center bg-gray-900 bg-opacity-50">
        <div class="p-24 sm:ml-72">
            <div class="max-w-screen-sm mx-auto p-4 bg-white rounded-md border-blue-600">
                <h2 class="text-lg font-medium mb-4">Tambah Order</h2>
                <form action="/storeOrder" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label for="kd_order" class="block">Kode Order:</label>
                        <input type="text" id="kd_order" name="kd_order" class="border rounded-md px-2 py-1">
                    </div>
                    
                    {{-- //dropdown nama pelanggan// --}}
                    <div class="mb-4">
                        <label for="id_pelanggan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pilih Nama Pelanggan</label>
                        <select id="id_pelanggan" name="id_pelanggan" id="id_pelanggan" class="bg-gray-50 border border-gray-300 text-gray-600 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 form-control @error('id_pelanggan') is-invalid @enderror">
                            <option value="">Pilih Nama Pelanggan..</option>
                            @foreach($datapel as $data)
                                <option value="{{ $data->id_pelanggan }}" >{{ $data->namapel }}</option>
                            @endforeach
                        </select>
                    </div>

                    {{-- //dropdown jenis laundry// --}}
                    <div class="mb-4">
                        <div class="mb-4">
                        <label for="jenis_laundry" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pilih Jenis Laundry</label>
                        <select id="jenis_laundry" name="jenis_laundry" id="jenis_laundry" class="bg-gray-50 border border-gray-300 text-gray-600 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 form-control @error('jenis_laundry') is-invalid @enderror">
                            <option value="">Pilih Jenis Laundry..</option>
                            @foreach($data_layanan as $datal)
                                <option value="{{ $datal->nama_layanan }}" harga="{{ $datal->harga }}">{{ $datal->nama_layanan }}</option>
                            @endforeach
                        </select>
                    </div>
                    </div>


                    <div class="mb-4">
                        <label for="durasi" class="block">Durasi:</label>
                        <input type="text" id="kontak" name="durasi" class="border rounded-md px-2 py-1">
                    </div>
                    {{-- <div class="mb-4">
                        <label for="qty" class="block">Qty:</label>
                        <input type="text" id="kontak" name="qty" class="border rounded-md px-2 py-1">
                    </div> --}}

                    <div class="mb-4">
                    <label for="qty" class="block">Qty:</label>
                    <input type="number" name="qty" id="qty" onchange="calculateTotal()" min="1" value="1">
                    </div>

                    <div class="mb-4">
                    <label for="total" class="block">Total:</label>
                    <input type="text" name="total" id="total" readonly>
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
