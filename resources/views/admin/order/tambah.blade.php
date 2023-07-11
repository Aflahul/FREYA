@extends('layout.index')
@section('content')
    <div class="fixed inset-0 flex justify-center bg-gray-900 bg-opacity-50">
        <div class="p-24 sm:ml-72">
            <div class="max-w-screen-sm mx-auto p-4 bg-white rounded-md border-blue-600">
                <h2 class="text-lg font-medium mb-4">Tambah Order</h2>
                <form action="/storeOrder" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label for="kode_order" class="block">Kode Order:</label>
                        <input type="text" id="kode_order" name="kd_order" class="border rounded-md px-2 py-1">
                    </div>
                    
                    {{-- //dropdown nama pelanggan// --}}
                    <div class="mb-4">
                        <label for="nama_pelanggan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pilih Nama Pelanggan</label>
                        <select id="nama_pelanggan" name="nama_pelanggan" id="nama_pelanggan" class="bg-gray-50 border border-gray-300 text-gray-600 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 form-control @error('nama_pelanggan') is-invalid @enderror">
                            <option value="">Pilih Nama Pelanggan..</option>
                            @foreach($datapel as $data)
                                <option value="{{ $data->namapel }}">{{ $data->namapel }}</option>
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
                                <option value="{{ $datal->nama_layanan }}">{{ $datal->nama_layanan }}</option>
                            @endforeach
                        </select>
                    </div>
                    </div>

                    {{-- //Dropdown durasi// --}}
                    {{-- <div class="mb-4">
                        <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">Durasi <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                        </svg></button>
                        <!-- Dropdown menu -->
                        <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                            </li>
                            </ul>
                        </div>
                    </div> --}}

                    <div class="mb-4">
                        <label for="durasi" class="block">Durasi:</label>
                        <input type="text" id="kontak" name="durasi" class="border rounded-md px-2 py-1">
                    </div>
                    <div class="mb-4">
                        <label for="qty" class="block">Qty:</label>
                        <input type="text" id="kontak" name="qty" class="border rounded-md px-2 py-1">
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
