{{-- <nav class="container">
    <div class="fixed z-50  bg-kuningpudar w-screen flex  items-center justify-between mx-auto px-10 md:px-20 p-4 ">
        <a href="#" class="flex items-center">
            <img src="asset/img/logo.jpg" class="h-8 mr-3 rounded" alt="Freya Logo" />
            <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Freya Laundry</span>
        </a>
        <button data-collapse-toggle="navbar-multi-level" type="button"
            class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-transparent focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-transparent dark:focus:ring-gray-600"
            aria-controls="navbar-multi-level" aria-expanded="false">
            <span class="sr-only"></span>
            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                    clip-rule="evenodd"></path>
            </svg>
        </button>
        <div class="bg-transparent hidden w-full md:block md:w-auto" id="navbar-multi-level">
            <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 md:flex-row md:space-x-8 md:mt-0">
                <li>
                    <a href="#home"
                        class="scroll-link block py-2 pl-3 pr-4 text-gray-900 rounded md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Home</a>
                </li>
                <li>
                    <a href="#paket"
                        class="scroll-link block py-2 pl-3 pr-4 text-gray-900 rounded md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Paket</a>
                </li>
                <li>
                    <a href="#laundrycare"
                        class="scroll-link block py-2 pl-3 pr-4 text-gray-900 rounded  md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Laundry
                        Care</a>
                </li>
                <li>
                    <a href="#tracking"
                        class="scroll-link block py-2 pl-3 pr-4 text-gray-900 rounded  md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Tracking</a>
                </li>
                <li>
                    <a href="#lokasi"
                        class="scroll-link block py-2 pl-3 pr-4 text-gray-900 rounded  md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Lokasi</a>
                </li>
                <li>
                    <a href="#about"
                        class="scroll-link block py-2 pl-3 pr-4 text-gray-900 rounded  md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">About</a>
                </li>
            </ul>
        </div>
    </div>
</nav> --}}
<nav class="fixed md:pl-52 z-50 w-screen top-0 mt-3">
    <div class="flex items-center w-full rounded-l-full bg-kuning px-3  mt-0 justify-between lg:px-2 lg:pl-2">
        <div>
            <div class="flex items-center justify-start">
                <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar"
                    type="button" class="inline-flex items-center rounded-lg sm:hidden">
                    <div class="px-2 items-center">
                        <i class="fas fa-bars"></i>
                    </div>
                </button>
                <a href="/dashboard" class="flex ml-3 md:mr-24">
                    <span class="self-center text-xl font-bold sm:text-xl whitespace-nowrap ">{{ $title }}</span>
                </a>
            </div>
        </div>
        <div class="flex items-center gap-5">
            <button type="button"
                class="relative px-1 inline-flex items-center text-sm font-medium text-center text-white rounded-lg hover:bg-yellow-400">
                <i class="far fa-envelope fa-2x"></i>
                <span class="sr-only">Notifications</span>
                <div
                    class="absolute inline-flex items-center justify-center w-4 h-4 text-[8px] font-bold text-white bg-red-500 rounded-full -top-1 -right-2">
                    20</div>
            </button>
            <img class="h-10 pr-4" src="{{ asset('asset/img/logo.jpg') }}" alt="logo">
        </div>
    </div>
</nav>
