<section id="about" class="bg-gelap">
    <div class="container  w-screen  py-5 md:px-10 mx-auto h-fit">
        <p class=" font-semibold text-3xl  text-white ">Tentang Kami</p>
        <hr class="my-5 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-6" />
        <footer class=" bg-gelap text-white dark:bg-gray-800">
            <div class="mx-auto max-w-screen-xl">
                <div class="flex flex-col justify-between md:flex-row gap-5  ">
                    <div class="flex flex-col justify-between md:flex-row gap-5 mb-3 md:mb-0 ">
                        <a href="#" class="">
                            @if ($profil->logo)
                                <img class="h-32" src="{{ 'data:image/jpeg;base64,' . base64_encode($profil->logo) }}"
                                    alt="logo">
                            @else
                                <img class="h-32" src="{{ asset('assets/img/default-logo.jpg') }}" alt="default logo">
                            @endif

                        </a>
                        <div>
                            <p>Bersih, Wangi, Rapi, Cepat, <br>
                                dan Profesional</p>
                        </div>
                    </div>
                    <div class="flex flex-col justify-end md:flex-row gap-5">

                        <div class="max-w-[14rem]">
                            <h2 class="mb-3 text-lg font-bold">Kontak
                            </h2>
                            <ul class="">
                                <li class="">
                                    <a href="#" class="hover:underline">
                                        <i class="fa-brands fa-whatsapp"></i>
                                    </a>
                                    <span> 0811488396</span>
                                </li>
                                <li class="">
                                    <a href="#" class="hover:underline ">
                                        <i class="fa-solid fa-location-dot"></i>
                                        <span class=" break-words">{{ $profil->alamat }}</span>
                                    </a>
                                </li>

                            </ul>
                        </div>
                        <div>
                            <h2 class="mb-3 text-lg font-bold">Produk & Layanan
                            </h2>
                            <ul class="">
                                @foreach ($produk as $cards)
                                    <li class="">
                                        <a href="#" class="hover:underline">{{ $cards->nama_layanan }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>

                    </div>
                </div>

                <hr class="my-5 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-6" />
                <div class="sm:flex sm:items-center sm:justify-between">
                    <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 <a href="#"
                            class="hover:underline">Freya Laundry™</a>. All Rights Reserved.
                    </span>

                </div>
            </div>
        </footer>
    </div>
</section>
