<section id="paket" class="bg-gelap shadow-2xl inset-y w-screen ">
    <div class="container  py-4 max-w-screen-xl items-center justify-between mx-auto px-7 h-fit">
        <div class="flex flex-col lg:flex-row gap-5 justify-between">
            <div id="kartunya" 
                class="flex order-2 justify-between gap-5 overflow-x-auto overscroll-none min-h-[18rem] max-h-[18rem] py-5 wscreen lg:w-2/3 drop-shadow-2xl inset-y hide-scrollbar">
                @foreach ($produk as $cards)
                    <div class="w-screen drop-shadow-2xl inset-x-auto">
                        <div
                            class="  min-w-[18rem] shadow-gl max-w-[18rem] max-h-[16rem] min-h-[16rem] p-4 bg-white border border-gray-200 rounded-lg  hover:border-blue-500 hover:bg-blue-100 hover:-mt-2 hover:drop-shadow-xl">
                            <h5 class="mb-2 text-blue-700 text-xl uppercase font-bold">{{ $cards->nama_layanan }}
                            </h5>
                            <div class="pt-2 flex items-baseline text-gray-900 dark:text-white">
                                <span class="text-lg pr-2 font-semibold">Rp</span>
                                <span class="text-5xl font-bold tracking-tight">{{ $cards->harga }}</span>
                                <span
                                    class="ml-1 text-md font-normal text-gray-500 dark:text-gray-400">/{{ $cards->satuan }}</span>
                            </div>
                            
                            <ul role="list" class="space-y-5 my-3 pt-4">
                                <li class="flex space-x-3 items-center">
                                    <svg class="flex-shrink-0 w-4 h-4 text-blue-600 dark:text-blue-500"
                                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                        viewBox="0 0 20 20">
                                        <path
                                            d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                    </svg>
                                    <span class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400">{{ $cards->desk }}</span>
                                </li>
                                <li class="flex space-x-3">
                                    <svg class="flex-shrink-0 w-4 h-4 text-blue-600 dark:text-blue-500"
                                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                        viewBox="0 0 20 20">
                                        <path
                                            d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                    </svg>
                                    <span
                                        class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400">{{ $cards->desk2 }}</span>
                                </li>
                                <li class="flex space-x-3">
                                    <svg class="flex-shrink-0 w-4 h-4 text-blue-600 dark:text-blue-500"
                                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                        viewBox="0 0 20 20">
                                        <path
                                            d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                    </svg>
                                    <span
                                        class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400">{{ $cards->desk3 }}</span>
                                </li>

                            </ul>

                        </div>
                    </div>
                @endforeach
            </div>
            <div id="keterngan" class="w-screen lg:w-1/3 pt-4 order-1">
                <p class="py-2 font-semibold text-2xl text-white">Produk dan Layanan</p>
                <p class="py-1 font-medium  text-white text-lg">Kami menawarkan berbagai macam pilihan paket laundry sesuaikan kebutuhan anda.
                <div class="lg:flex hidden justify-start items-start pt-10 gap-5 text-belum ">
                    <div class="scroll-arrow left bg-white h-fit w-fit rounded-full drop-shadow hover:text-w3 hover:bg-gelap  ">
                        <i class="fas fa-chevron-circle-left fa-2xl "></i>
                    </div>
                    <!-- Konten lainnya -->
                    <div class="scroll-arrow right bg-white h-fit w-fit rounded-full drop-shadow hover:text-w3 hover:bg-gelap  ">
                       <i class="fas fa-chevron-circle-right fa-2xl "></i>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <script>
        const scrollContainer = document.querySelector('.overflow-x-auto');
        const scrollLeftBtn = document.querySelector('.scroll-arrow.left');
        const scrollRightBtn = document.querySelector('.scroll-arrow.right');

        scrollLeftBtn.addEventListener('click', () => {
            scrollContainer.scrollBy({
                left: -100,
                behavior: 'smooth'
            });
        });

        scrollRightBtn.addEventListener('click', () => {
            scrollContainer.scrollBy({
                left: 100,
                behavior: 'smooth'
            });
        });
    </script>

</section>
