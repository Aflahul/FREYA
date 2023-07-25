<section id="tracking" class="bg-kuningpudar h-1/2">
    <div class="container w-screen py-10 md:px-10 mx-auto h-fit">
        <p class="py-2 font-semibold text-2xl">Tracking</p>
        <p class="py-1 text-lg">Cek Status Laundry anda disini</p>
        <form class="py-3 pt-1 flex flex-col items-center" action="{{ route('landing.search-invoice') }}" method="POST">
            @csrf
            <div class="pl-3 flex items-center bg-white border border-1 w-full rounded-lg text-black">
                <i class="fa-solid fa-magnifying-glass"></i>
                <input type="search" id="default-search" name="invoice_number"
                    class="w-full p-2 text-sm border border-white text-gray-900"
                    placeholder="Masukkan Kode Invoice Anda disini.." required>
                <button type="submit" id="searchButton"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
            </div>
        </form>

        <div id="stepper" class="container w-screen pb-5 md:px-10 mx-auto h-fit max-w-full mt-2">
            @if ($error)
                <div class="bg-red-500 text-white p-4 rounded">
                    {{ $error }}
                </div>
            @endif
            @if ($status)
                <p class="text-center text-lg font-bold pb-8">Status Laundry Anda</p>
                <ol class="flex items-center justify-center w-creen">
                    <!-- Tahap 1: "Sudah di Input" selalu ditampilkan dan dianggap selesai -->
                    <li class="w-full">
                        <div class="flex justify-center flex-col">
                            <div
                                class="flex w-full items-baseline text-blue-600  after:content-[''] after:w-full after:h-1 after:border-b after:border-green-500 after:border-4 after:inline-block ">
                                <div class="flex flex-col justify-center">
                                    <span
                                        class="flex items-center justify-center w-10 h-10 bg-green-500 rounded-full lg:h-12 lg:w-12  shrink-0">
                                        <i class="fa-solid fa-check text-white"></i>
                                    </span>
                                </div>
                            </div>
                            <span class=" min-w-[10rem] font-medium whitespace-nowrap">Input</span>
                        </div>
                    </li>
                    <!-- Tahap 2: "Sedang Cuci" atau "Selesai Cuci" -->
                    <li class="w-full">
                        <div class="flex flex-col ">
                            <div
                                class="flex w-full items-baseline text-blue-600  after:content-[''] after:w-full after:h-1 after:border-b after:{{ $status['status'] === 'Selesai' ? 'border-green-500' : 'border-gray-200' }} after:border-4 after:inline-block ">
                                <div class="flex flex-col justify-center">
                                    <span
                                        class="flex items-center justify-center w-10 h-10 {{ $status['status'] === 'Selesai' ? 'bg-green-500' : 'bg-gray-200' }}  rounded-full lg:h-12 lg:w-12  shrink-0">
                                        <i
                                            class="fa-solid {{ $status['status'] === 'Selesai' ? 'fa-check' : 'fa-x' }} text-white"></i>
                                    </span>
                                </div>
                            </div>
                            <span
                                class="min-w-[10rem] font-medium whitespace-nowrap">{{ $status['status'] === 'Selesai' ? 'Selesai Cuci' : 'Sedang Cuci' }}</span>
                        </div>
                    </li>

                    <!-- Tahap 3: "Sudah Dibayar" atau "Belum Dibayar" -->
                    <li class="w-full">
                        <div class="flex justify-center flex-col">
                            <div
                                class="flex w-full items-baseline text-blue-600  after:content-[''] after:w-full after:h-1 after:border-b after:{{ $status['status'] === 'Selesai' ? 'border-green-500' : 'border-gray-200' }} after:border-4 after:inline-block ">
                                <div class="flex flex-col justify-center">
                                    <span
                                        class="flex items-center justify-center w-10 h-10 {{ $status['status_pembayaran'] === 'Sudah Dibayar' ? 'bg-green-500' : 'bg-gray-200' }} rounded-full lg:h-12 lg:w-12  shrink-0">
                                        <i
                                            class="fa-solid {{ $status['status_pembayaran'] === 'Sudah Dibayar' ? 'fa-check' : 'fa-x' }} text-white"></i>
                                    </span>
                                </div>
                            </div>
                            <span
                                class="min-w-[10rem] font-medium whitespace-nowrap">{{ $status['status_pembayaran'] === 'Sudah Dibayar' ? 'Sudah Dibayar' : 'Belum Dibayar' }}</span>
                        </div>
                    </li>

                    <!-- Tahap 4: "Selesai" atau "Proses" -->
                    <li class="">
                        <div class="flex justify-center flex-col">
                            {{-- <div class="flex w-full items-baseline text-blue-600 "> --}}
                            <div class="flex flex-col justify-center">
                                <span
                                    class="flex items-center justify-center w-10 h-10 {{ $status['status'] === 'Selesai' && $status['status_pembayaran'] === 'Sudah Dibayar' ? 'bg-green-500' : 'bg-gray-200' }}  rounded-full lg:h-12 lg:w-12  shrink-0">
                                    <i
                                        class="fa-solid {{ $status['status'] === 'Selesai' && $status['status_pembayaran'] === 'Sudah Dibayar' ? 'fa-check' : 'fa-x' }} text-white"></i>
                                </span>

                                {{-- </div> --}}
                                <span
                                    class="min-w-fit font-medium whitespace-nowrap">{{ $status['status'] === 'Selesai' && $status['status_pembayaran'] === 'Sudah Dibayar' ? 'Selesai' : 'Sedang Proses' }}</span>
                            </div>
                        </div>
                    </li>
                </ol>
            @endif
        </div>





    </div>
</section>
