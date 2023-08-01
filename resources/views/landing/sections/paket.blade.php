<section id="paket" class="w-screen">
    <div class="bg-gelap">
        <div class="container py-4 max-w-screen-xl items-center justify-between mx-auto px-3  sm:px-7">
            <p class="py-2 font-semibold text-2xl min-h-[13rem] text-white ">Produk dan Layanan</p>
        </div>
    </div>
    <div
        class="-mt-[13rem] container pt-5 pb-4 max-w-screen-xl items-center justify-between mx-auto px-3 min-h-[20rem] sm:px-7">
        <div class="flex gab-5 flex-col lg:flex-row">
            <div class="flex flex-row gap-5 justify-between basis-3/12">
                <div id="keterangan" class="flex flex-col pt-2  ">
                    <div class="">
                        <p class="py-4 font-medium text-white ">Kami menawarkan berbagai macam pilihan paket laundry
                            sesuaikan
                            kebutuhan anda.</p>
                    </div>
                    <div class="">
                        <div class="lg:flex hidden gap-6">
                            <div id="arrowkiri"class="text-orange-400">
                                <i class="fas fa-chevron-circle-left fa-2xl"></i>
                            </div>
                            <div id=arrowkanan class="text-orange-400">
                                <i class="fas fa-chevron-circle-right fa-2xl"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="kartunya" class="flex gap-5 overflow-x-auto pt-4 pb-5 basis-9/12  ">
                @foreach ($produk as $cards)
                    <div class="w-full ">
                        <div
                            class="drop-shadow-lg min-w-[18rem]  max-w-[18rem] max-h-[16rem] min-h-[16rem] p-4 bg-white border border-gray-200 rounded-lg hover:border-blue-500 hover:bg-blue-100 hover:-mt-2 hover:drop-shadow-xl">
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
                                    <span
                                        class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400">{{ $cards->desk }}</span>
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
                                        class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400">{{ $cards->durasi }}
                                        Hari</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

    </div>


</section>

<script>
    $(document).ready(function() {
        // Fungsi untuk scroll ke kiri
        $("#arrowkiri").click(function() {
            $("#kartunya").animate({
                scrollLeft: "-=200"
            }, "");
        });

        // Fungsi untuk scroll ke kanan
        $("#arrowkanan").click(function() {
            $("#kartunya").animate({
                scrollLeft: "+=200"
            }, "");
        });
        $("#arrowkiri").click(function() {
            console.log("Ikon 'left' diklik.");
            $("#kartunya").animate({
                scrollLeft: "-=200"
            }, "");
        });

    });
</script>
