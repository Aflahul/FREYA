<aside id="logo-sidebar"
    class="fixed top-0 left-0 z-40 w-72 h-screen pt-10 bg-latar transition-transform -translate-x-full sidebar in-active sm:translate-x-0"
    aria-label="Sidebar">
    <div class="h-full px-2 overflow-y-auto bg-white">
        <div class="pb-2 w-full flex flex-col items-center justify-center border-b-2">
            <i class="fas fa-user-circle fa-4x" style="color: #4c4c4b;"></i>
            <p class="pt-2 font-normal">Hi! Selamat datang</p>
            <p class="font-bold text-lg text-sudah">{{ auth()->user()->nama }}</p>
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
