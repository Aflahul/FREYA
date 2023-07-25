@extends('layout.index')

@section('content')
    <div class="p-8 mt-20 sm:ml-72">
        <form action="{{ route('UpdateProfil.update', $profil->id_laundry) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="grid grid-cols-1 md:grid-cols-2 gap-5 drop-shadow-md">
                <div class="order-end md:order-first">
                    <div class="mb-6">
                        <label for="nama_laundry" class="block mb-2 text-base font-medium text-sudah">Nama Laundry</label>
                        <input type="text" id="nama_laundry" name="nama_laundry"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-sudah focus:border-sudah block w-full p-2.5"
                            value="{{ old('nama_laundry', $profil->nama_laundry) }}" required>
                    </div>
                    <div class="mb-6">
                            <label for="alamat" class="block mb-2 text-base font-medium text-sudah">Alamat</label>
                            <input type="text" id="alamat" name="alamat"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-sudah focus:border-sudah block w-full p-2.5"
                                value="{{ old('alamat', $profil->alamat) }}" required>
                        </div>
                    
                    <div class="mb-6 w-64">
                        <label for="kontak" class="block mb-2 text-base font-medium text-sudah">Kontak</label>
                        <input type="tel" id="kontak" name="kontak"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-sudah focus:border-sudah block w-full p-2.5"
                            value="{{ old('kontak', $profil->kontak) }}" required>
                    </div>
                </div>

                <div class="relative order-first md:order-last">
                    <div class="bg-white rounded-md shadow-lg overflow-hidden">
                        @if ($profil->logo)
                            @php
                                $imageData = base64_encode($profil->logo);
                                $imageSrc = 'data:image/jpeg;base64,' . $imageData;
                            @endphp
                            <img src="{{ $imageSrc }}" alt="Logo" class="w-full h-auto">
                        @else
                            <img src="{{ asset('assets/img/default-logo.jpg') }}" alt="Default Logo" class="w-full h-auto">
                        @endif
                        <div
                            class="absolute inset-0 bg-white opacity-0 hover:opacity-50 hover:rounded-md transition duration-300">
                            <div class="flex items-center justify-center rounded-md h-full">
                                <a href="#" class="text-black">
                                    <i class="fa-solid fa-circle-up fa-3x"></i> Upload
                                </a>
                            </div>
                        </div>
                    </div>
                    <input type="file" name="logo" class="hidden">
                </div>

            </div>
            <div class="grid grid-cols-1 drop-shadow-md">
                <div class="">
                    <div>
                        <div class="mb-6 ">
                        <label for="tagline" class="block mb-2 text-base font-medium text-sudah">Tagline Laundry</label>
                        <textarea type="text" id="tagline" name="tagline"
                            class=" bg-gray-50 h-[40px] border border-gray-300 text-gray-900 text-sm rounded-lg tinymce-editor focus:ring-sudah focus:border-sudah block w-full p-2.5"
                            required>{!! $profil->tagline !!}</textarea>
                    </div>
                        <div class="mb-6">
                            <label for="desk" class="block mb-2 text-base font-medium text-sudah">Deskripsi</label>
                            <textarea type="text" id="desk" name="desk"
                                class="tinymce-editor bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-sudah focus:border-sudah block w-full p-2.5"
                                 required>{!! $profil->desk !!}</textarea>
                        </div>
                    </div>
                </div>

            </div>
            <div class="flex justify-end">
                <button type="submit"
                    class="text-white bg-belum hover:bg-sudah font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2 text-center">Simpan</button>
            </div>
        </form>
    </div>
@endsection
