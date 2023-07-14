<aside id="logo-sidebar"
    class="  fixed top-5 left-3 bottom-3 z-40 w-64 h-screen pt-4 bg-navbar1 transition-transform -translate-x-full sidebar  rounded-t-[5px] in-active sm:translate-x-0"
    aria-label="Sidebar">
    <div class="h-full  overflow-y-auto  ">
        <div class="pb-2 pl-2 w-full flex flex-col items-center justify-center ">
            <img class="w-32 " src="{{ asset('asset/img/logo.jpg') }}" alt="logo">
            {{-- <i class="fas fa-user-circle fa-4x" style="color: #0B409C;"></i>
            <p class="pt-2 font-normal">Hi! Selamat datang</p>
            <p class="font-bold text-lg text-navbar">Admin</p> --}}
        </div>
        <ul class="mt-2 pl-8 pt-2 space-y-1 font-normal">
            <li class=" list-none">
                <a href="/dashboard"
                    class="flex flex-row items-center rounded-lg {{ $title == 'Dashboard' ? 'text-black font-extrabold py-1.5  bg-kuningpudar  rounded-l-full' : 'text-white py-1.5 hover:text-kuning hover:font-bold' }}">
                    <div class="w-6 object-center pl-5 ">
                        <i id="icon-menu" class="fa-solid fa-house-chimney text-center"></i>
                    </div>
                    <span class="ml-6">Dashboard</span>

                </a>
            </li>
            <li class=" list-none">
                <a href="/pelanggan"
                    class="flex flex-row items-center rounded-lg {{ $title == 'Pelanggan' ? 'text-white font-bold' : 'text-white py-1.5 hover:text-kuning hover:font-bold' }}">
                    <div class="w-6 object-center pl-5 ">
                        <i id="icon-menu" class="fa-solid fa-address-book"></i>
                    </div>
                    <span class="flex-1 ml-6 whitespace-nowrap">Pelanggan</span>
                </a>
            </li>
            <li class=" list-none">
                <a href="/order"
                    class="flex items-center rounded-lg {{ $title == 'Order' ? 'text-black font-extrabold py-1.5  bg-kuningpudar rounded-l-full' : 'text-white py-1.5 hover:text-kuning hover:font-bold' }}">
                    <div class="w-6 object-center pl-5 ">
                        <i id="icon-menu" class="fa-solid fa-cart-plus"></i>
                    </div>
                    <span class="flex-1 ml-6 whitespace-nowrap">Order</span>
                </a>
            </li>
            <li class="  list-none ">
                <a href="/pengeluaran"
                    class="flex items-center rounded-lg {{ $title == 'Pengeluaran' ? 'text-white font-bold' : 'text-white py-1.5 hover:text-kuning hover:font-bold' }}">
                    <div class="w-6 object-center pl-5 ">
                        <i id="icon-menu" class=" fa-solid fa-dollar-sign"></i>
                    </div>
                    <span class="flex-1 ml-6 whitespace-nowrap">Pengeluaran</span>
                </a>
            </li>
            <li class="pl-2.5 list-none">
                <button type="button" class="flex flex-row items-center w-full text-kuning font-extrabold">
                    {{-- <div class="w-6 object-c pl-5eenter">
                        <i id="icon-menu" class="fa-solid fa-file-lines"></i>
                    </div> --}}
                    <span class="flex-1 text-left whitespace-nowrap">Laporan</span>
                </button>
            <li class=" list-none">
                <a href="/laporan"
                    class="flex items-center rounded-lg {{ $title == 'Transaksi' ? 'text-white font-bold' : 'text-white py-1.5 hover:text-kuning hover:font-bold' }}hover:bg-gray-100">
                    <div class="w-6 object-center pl-5 ">
                        <i id="icon-menu" class="fa-solid fa-file-lines"></i>
                    </div>
                    <span class="flex-1 ml-6 whitespace-nowrap">Data Transaksi</span>
                </a>
            </li>
            <li class=" list-none">
                <a href="/kas"
                    class="flex items-center rounded-lg  {{ $title == 'Arus Kas' ? 'text-white font-bold' : 'text-white py-1.5 hover:text-kuning hover:font-bold' }}">
                    <div class="w-6 object-center pl-5 ">
                        <i id="icon-menu" class="fa-solid fa-file-lines"></i>
                    </div>
                    <span class="flex-1 ml-6 whitespace-nowrap">Arus Kas</span>
                </a>
            </li>

            <li class="pl-2.5 list-none">
                <button type="button" class="flex flex-row items-center w-full text-kuning font-extrabold">
                    {{-- <div class="w-6 object-c pl-5eenter">
                        <i id="icon-menu" class="fa-solid fa-file-lines"></i>
                    </div> --}}
                    <span class="flex-1 text-left whitespace-nowrap">Pengaturan</span>
                </button>

            <li class=" list-none">
                <a href="/profil"
                    class="flex items-center rounded-lg  {{ $title == 'Profil Laundry' ? 'text-white font-bold' : 'text-white py-1.5 hover:text-kuning hover:font-bold' }}">
                    <div class="w-6 object-center pl-5 ">
                        <i id="icon-menu" class="fa-solid fa-file-lines"></i>
                    </div>
                    <span class="flex-1 ml-6 whitespace-nowrap">Profil Laundry</span>
                </a>
            </li>
            <li class=" list-none">
                <a href="/produk"
                    class="flex items-center rounded-lg  {{ $title == 'Produk & Layanan' ? 'text-white font-bold' : 'text-white py-1.5 hover:text-kuning hover:font-bold' }}">
                    <div class="w-6 object-center pl-5 ">
                        <i id="icon-menu" class="fa-solid fa-file-lines"></i>
                    </div>
                    <span class="flex-1 ml-6 whitespace-nowrap">Produk & Layanan</span>
                </a>
            </li>
            {{-- <li class=" list-none">
                        <a href="/pesan"
                            class="flex items-center rounded-lg  {{ $title == 'Setting-Pesan' ? 'text-white font-bold' : 'text-white py-1.5 hover:text-kuning hover:font-bold' }}">Pesan</a>
                    </li> --}}
            <li class=" list-none">
                <a href="/artikel"
                    class="flex items-center rounded-lg  {{ $title == 'Artikel' ? 'text-white font-bold' : 'text-white py-1.5 hover:text-kuning hover:font-bold' }}">
                    <div class="w-6 object-center pl-5 ">
                        <i id="icon-menu" class="fa-solid fa-file-lines"></i>
                    </div>
                    <span class="flex-1 ml-6 whitespace-nowrap">Artikel</span>
                </a>
            </li>
            <li class=" list-none">
                <a href="/user"
                    class="flex items-center rounded-lg  {{ $title == 'User' ? 'text-white font-bold' : 'text-white py-1.5 hover:text-kuning hover:font-bold' }}">
                    <div class="w-6 object-center pl-5 ">
                        <i id="icon-menu" class="fa-solid fa-file-lines"></i>
                    </div>
                    <span class="flex-1 ml-6 whitespace-nowrap">User</span>
                </a>
            </li>
            <li class=" font-normal">
                <form id="logout-link" action="{{ route('logout') }}" method="POST">
                    @csrf
                    <a type="submit"
                        class="flex items-center text-kuning font-bold rounded-lg  hover:font-extrabold">
                        <div class="w-6 object-center flex justify-center">
                            <i class="fa-solid fa-right-from-bracket"></i>
                        </div>
                        <span class="flex-1 ml-6 whitespace-nowrap">Log Out</span>
                    </a>
                </form>
            </li>
        </ul>
</aside>
