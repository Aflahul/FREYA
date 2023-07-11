<nav class="container">
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
                <li><aside id="logo-sidebar"
    class="fixed top-0 left-0 z-40 w-72 h-screen pt-10 bg-white transition-transform -translate-x-full sidebar in-active sm:translate-x-0"
    aria-label="Sidebar">
    <div class="h-full px-2 overflow-y-auto bg-white">
        <div class="pb-2 w-full flex flex-col items-center justify-center border-b-2">
            <i class="fas fa-user-circle fa-4x" style="color: #4c4c4b;"></i>
            <p class="pt-2 font-normal">Hi! Selamat datang</p>
            <p class="font-bold text-lg text-sudah">Admin</p>
        </div>
        <ul class="mt-2 pt-2 space-y-1 font-normal">
            <li class="p-1.5 list-none">
                <a href="/dashboard"
                    class="flex flex-row items-center rounded-lg {{ $title == 'Dashboard' ? 'text-black font-bold' : 'text-gray-500 hover:text-gray-950 hover:font-semibold' }} hover:bg-gray-100">
                    <div class="w-6 object-center flex justify-center">
                        <i id="icon-menu" class="fa-solid fa-house-chimney text-center"></i>
                    </div>
                    <span class="ml-6">Dashboard</span>
                </a>
            </li>
            <li class="p-1.5 list-none">
                <a href="/pelanggan"
                    class="flex flex-row items-center rounded-lg {{ $title == 'Pelanggan' ? 'text-black font-bold' : 'text-gray-500 hover:text-gray-950 hover:font-semibold' }} hover:bg-gray-100">
                    <div class="w-6 object-center flex justify-center">
                        <i id="icon-menu" class="fa-solid fa-address-book"></i>
                    </div>
                    <span class="flex-1 ml-6 whitespace-nowrap">Pelanggan</span>
                </a>
            </li>
            <li class="p-1.5 list-none">
                <a href="/order"
                    class="flex items-center rounded-lg {{ $title == 'Orderan' ? 'text-black font-bold' : 'text-gray-500 hover:text-gray-950 hover:font-semibold' }} hover:bg-gray-100">
                    <div class="w-6 object-center flex justify-center">
                        <i id="icon-menu" class="fa-solid fa-cart-plus"></i>
                    </div>
                    <span class="flex-1 ml-6 whitespace-nowrap">Order</span>
                </a>
            </li>
            <li class="p-1.5 list-none  border-b-2 ">
                <a href="/pengeluaran"
                    class="flex items-center rounded-lg {{ $title == 'Pengeluaran' ? 'text-black font-bold' : 'text-gray-500 hover:text-gray-950 hover:font-semibold' }} hover:bg-gray-100">
                    <div class="w-6 object-center flex justify-center">
                        <i id="icon-menu" class="fa-solid fa-dollar-sign"></i>
                    </div>
                    <span class="flex-1 ml-6 whitespace-nowrap">Pengeluaran</span>
                </a>
            </li>
        </ul>
</aside>

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
</nav>
