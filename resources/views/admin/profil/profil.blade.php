@extends('layout.index')

@section('content')
    <div class="p-8 mt-20 sm:ml-72">
        <form action="{{ route('UpdateProfil.update', $profil->id_laundry) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="grid grid-cols-1 md:grid-cols-2  gap-5 drop-shadow-md">
                <div class="order-end md:order-first">
                    <div class="mb-6">
                        <label for="nama_laundry" class="block mb-2 text-base font-medium text-sudah ">Nama Laundry </label>
                        <input type="text" id="nama_laundry" name="nama_laundry"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-sudah focus:border-sudah block w-full p-2.5 "
                            value="{{ old('nama_laundry', $profil->nama_laundry) }}" required>
                    </div>
                    <div class="mb-6">
                        <label for="tagline" class="block mb-2 text-base font-medium text-sudah ">Tagline Laundry</label>
                        <input type="text" id="tagline" name="tagline"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-sudah focus:border-sudah block w-full p-2.5 "value="{{ old('tagline', $profil->tagline) }}"
                            required>
                    </div>
                    <div class="mb-6 w-64">
                        <label for="contact" class="block mb-2 text-base font-medium text-sudah ">Kontak</label>
                        <input type="tel" id="contact" name="kontak"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-sudah focus:border-sudah block w-full p-2.5 "
                            value="{{ old('kontak', $profil->kontak) }}" required>
                    </div>
                </div>

                <div class="relative order-first md:order-last">
                    <div class="bg-white rounded-md shadow-lg overflow-hidden">
                        <img src="asset/img/logo.jpg" alt="Foto" class="w-full h-auto">
                        <div
                            class="absolute inset-0 bg-white opacity-0 hover:opacity-50 hover:rounded-md transition duration-300">
                            <div class="flex items-center justify-center rounded-md h-full">
                                <a href="#" class="text-black ">
                                    <i class="fa-solid fa-circle-up fa-3x"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="grid grid-cols-1 drop-shadow-md">
                <div class="">
                    <div>
                        <div class="mb-6">
                            <label for="alamat" class="block mb-2 text-base font-medium text-sudah ">Alamat </label>
                            <input type="text" id="alamat" name="alamat"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-sudah focus:border-sudah block w-full p-2.5 "
                                value="{{ old('alamat', $profil->alamat) }}" required>
                        </div>
                        <div class="mb-6">
                            <label for="desk" class="block mb-2 text-base font-medium text-sudah ">Deskripsi</label>
                            <input type="text" id="desk" name="desk"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-sudah focus:border-sudah block w-full p-2.5 "value="{{ old('desk', $profil->desk) }}"
                                required>
                        </div>
                    </div>
                </div>

            </div>
            <div class="flex justify-end">
                <button type="submit"
                    class="text-white bg-belum hover:bg-sudah font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2 text-center ">Simpannn</button>

            </div>
        </form>
        {{-- <button type="submit"
                class="text-white bg-belum hover:bg-sudah font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2 text-center ">Ubah</button>
        </div> --}}
    </div>
    </div>
@endsection
