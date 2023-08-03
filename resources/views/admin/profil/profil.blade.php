@extends('layout.index')

@section('content')
    <div class="p-8 mt-10 sm:ml-72">
        <form action="{{ route('UpdateProfil.update', $profil->id_laundry) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="grid grid-cols-1 md:grid-cols-2 gap-5 ">
                <div class="order-end md:order-first">
                    <div class="mb-1">
                        <label for="nama_laundry" class="block mb-0.5 text-base font-medium text-sudah">Nama Laundry</label>
                        <input type="text" id="nama_laundry" name="nama_laundry"
                            class="bg-latar border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-sudah focus:border-sudah block w-full p-2.5"
                            value="{{ old('nama_laundry', $profil->nama_laundry) }}" required>
                    </div>

                    <div class="mb-1">
                        <div class="flex items-center">
                            <label for="kontak" class="block mb-0.5 text-base font-medium text-sudah">Kontak</label><span class="font-extralight text-xs  ml-2"><i>* Sertakan Kode negara tanpa tanda plus "+"</i>
                            </span>
                        </div>
                        <input type="tel" id="kontak" name="kontak"
                            class="bg-latar border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-sudah focus:border-sudah block w-full p-2.5"
                            value="{{ old('kontak', $profil->kontak) }}" required>
                        
                    </div>
                    <div class="mb-1">
                        <label for="alamat" class="block mb-0.5 text-base font-medium text-sudah">Alamat</label>
                        <input type="text" id="alamat" name="alamat"
                            class="bg-latar border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-sudah focus:border-sudah block w-full p-2.5"
                            value="{{ old('alamat', $profil->alamat) }}" required>
                    </div>
                    <div class="flex justify-between gap-2 ">
                        <div class="mb-1 w-full">
                            <label for="latitude" class="block mb-2 text-base font-medium text-sudah">Latitude</label>
                            <input type="text" id="latitude" name="latitude"
                                class="bg-latar border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-sudah focus:border-sudah block w-full p-2.5"
                                value="{{ old('latitude', $profil->latitude) }}" required>
                        </div>

                        <div class=" w-full">
                            <label for="longitude" class="block mb-2 text-base font-medium text-sudah">Longitude</label>
                            <input type="text" id="longitude" name="longitude"
                                class="bg-latar border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-sudah focus:border-sudah block w-full p-2.5"
                                value="{{ old('longitude', $profil->longitude) }}" required>
                        </div>

                    </div>
                </div>

                <div class=" relative order-first md:order-last">
                    <div class="bg-latar rounded-md shadow-lg overflow-hidden">
                        @if ($profil->logo)
                            @php
                                $imageData = base64_encode($profil->logo);
                                $imageSrc = 'data:image/jpeg;base64,' . $imageData;
                            @endphp
                            <img src="{{ $imageSrc }}" alt="Logo" class="w-fit h-auto">
                        @else
                            <img src="{{ asset('assets/img/default-logo.jpg') }}" alt="Default Logo" class="w-fit h-auto">
                        @endif
                        <div
                            class="absolute inset-0 bg-latar opacity-0 hover:opacity-50 hover:rounded-md transition duration-300">
                            <div class="flex flex-col items-center justify-center rounded-md h-full">
                                <a href="#" class="text-black font-bold text-center">
                                    <div class="">
                                        <i class="fa-solid fa-circle-up fa-3x"></i>
                                    </div>
                                    <p >Ganti Logo</p> 
                                </a>
                            </div>
                        </div>
                    </div>
                    <input type="file" name="logo" class="hidden">
                </div>

            </div>

            <div class="grid grid-cols-1 ">
                <div class="">
                    <div>
                        <div class="mb-1 ">
                            <label for="tagline" class="block mb-2 text-base font-medium text-sudah">Tagline
                                Laundry</label>
                            <textarea type="text" id="tagline" name="tagline"
                                class=" bg-latar h-[40px] border border-gray-300 text-gray-900 text-sm rounded-lg tinymce-editor focus:ring-sudah focus:border-sudah block w-full p-2.5"
                                required>{!! $profil->tagline !!}</textarea>
                        </div>
                        <div class="mb-1">
                            <label for="desk" class="block mb-2 text-base font-medium text-sudah">Deskripsi</label>
                            <textarea type="text" id="desk" name="desk"
                                class="tinymce-editor bg-latar border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-sudah focus:border-sudah block w-full p-2.5"
                                required>{!! $profil->desk !!}</textarea>
                        </div>
                    </div>
                </div>

            </div>
            <div class="flex  mt-0.5">
                <button type="submit"
                    class="text-white bg-belum hover:bg-sudah font-medium rounded-lg text-sm w-full sm:w-auto px-3 py-1 text-center">Simpan</button>
            </div>
        </form>
    </div>
@endsection
