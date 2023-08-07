<aside id="logo-sidebar"
    class="flex flex-col  fixed top-5 left-3 bottom-3 z-50 w-64 h-screen bg-navbar1 transition-transform -translate-x-full sidebar  rounded-t-[5px] in-active sm:translate-x-0"
    aria-label="Sidebar">
    <div class=" basis-5/6  ">
        <div class="pb-2 pl-2 pt-4 w-full flex flex-col items-center justify-center rounded-t-[5px]">
            @if ($profil->logo)
                <img class="w-32 rounded" src="{{ 'data:image/jpeg;base64,' . base64_encode($profil->logo) }}"
                    alt="logo">
            @else
                <img class="w-32 rounded" src="{{ asset('assets/img/default-logo.jpg') }}" alt="default logo">
            @endif
        </div>
        <div class="">
            <ul class="mt-2 pl-8 pt-2 space-y-1 border-t-2 font-normal">
                <li class=" list-none ">
                    <a href="/dashboard"
                        class="flex flex-row items-center rounded-lg {{ $title == 'Dashboard' ? 'text-sidebar font-bold drop-shadow-lg py-1' : 'text-white py-1 hover:text-kuning hover:font-bold' }}">
                        <div class="w-6 object-center pl-5 ">
                            <i id="icon-menu" class="fa-solid fa-house-chimney text-center"></i>
                        </div>
                        <span class="ml-6">Dashboard</span>
                    </a>
                </li>
                <li class=" list-none">
                    <a href="/pelanggan"
                        class="flex flex-row items-center rounded-lg {{ $title == 'Pelanggan' ? 'text-sidebar font-bold drop-shadow-lg py-1' : 'text-white py-1 hover:text-kuning hover:font-bold' }}">
                        <div class="w-6 object-center pl-5 ">
                            <i id="icon-menu" class="fa-solid fa-address-book"></i>
                        </div>
                        <span class="flex-1 ml-6 whitespace-nowrap">Pelanggan</span>
                    </a>
                </li>
                <li class=" list-none">
                    <a href="/order"
                        class="flex items-center rounded-lg {{ $title == 'Order' ? 'text-sidebar font-bold drop-shadow-lg py-1' : 'text-white py-1 hover:text-kuning hover:font-bold' }}">
                        <div class="w-6 object-center pl-5 ">
                            <i id="icon-menu" class="fa-solid fa-cart-plus"></i>
                        </div>
                        <span class="flex-1 ml-6 whitespace-nowrap">Order</span>
                    </a>
                </li>
                <li class="  list-none ">
                    <a href="/pengeluaran"
                        class="flex items-center rounded-lg {{ $title == 'Pengeluaran' ? 'text-sidebar font-bold drop-shadow-lg py-1' : 'text-white py-1 hover:text-kuning hover:font-bold' }}">
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
                        class="flex items-center rounded-lg {{ $title == 'Transaksi' ? 'text-sidebar font-bold drop-shadow-lg py-1' : 'text-white py-1 hover:text-kuning hover:font-bold' }}hover:bg-gray-100">
                        <div class="w-6 object-center pl-5 ">
                            <i id="icon-menu" class="fa-solid fa-file-lines"></i>
                        </div>
                        <span class="flex-1 ml-6 whitespace-nowrap">Data Transaksi</span>
                    </a>
                </li>
                <li class=" list-none">
                    <a href="/kas"
                        class="flex items-center rounded-lg  {{ $title == 'Arus Kas' ? 'text-sidebar font-bold drop-shadow-lg py-1' : 'text-white py-1 hover:text-kuning hover:font-bold' }}">
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
                        class="flex items-center rounded-lg  {{ $title == 'Profil Laundry' ? 'text-sidebar font-bold drop-shadow-lg py-1' : 'text-white py-1 hover:text-kuning hover:font-bold' }}">
                        <div class="w-6 object-center pl-5 ">
                            {{-- <i id="icon-menu" class="fa-solid fa-file-lines"></i> --}}
                           <i id="icon-menu" class="fa-solid fa-gear"></i>
                        </div>
                        <span class="flex-1 ml-6 whitespace-nowrap">Profil Laundry</span>
                    </a>
                </li>
                <li class=" list-none">
                    <a href="/produk"
                        class="flex items-center rounded-lg  {{ $title == 'Produk & Layanan' ? 'text-sidebar font-bold drop-shadow-lg py-1' : 'text-white py-1 hover:text-kuning hover:font-bold' }}">
                        <div class="w-6 object-center pl-5 ">
                           <i id="icon-menu" class="fa-solid fa-gear"></i>
                        </div>
                        <span class="flex-1 ml-6 whitespace-nowrap">Produk & Layanan</span>
                    </a>
                </li>
                {{-- <li class=" list-none">
                        <a href="/pesan"
                            class="flex items-center rounded-lg  {{ $title == 'Setting-Pesan' ? 'text-sidebar font-bold' : 'text-sidebar py-1 hover:text-kuning hover:font-bold' }}">Pesan</a>
                    </li> --}}
                <li class=" list-none">
                    <a href="/artikel"
                        class="flex items-center rounded-lg  {{ $title == 'Artikel' ? 'text-sidebar font-bold drop-shadow-lg py-1' : 'text-white py-1 hover:text-kuning hover:font-bold' }}">
                        <div class="w-6 object-center pl-5 ">
                           <i id="icon-menu" class="fa-solid fa-gear"></i>
                        </div>
                        <span class="flex-1 ml-6 whitespace-nowrap">Artikel</span>
                    </a>
                </li>
                <li class=" list-none">
                    <a href="/user"
                        class="flex items-center rounded-lg  {{ $title == 'User' ? 'text-sidebar font-bold drop-shadow-lg py-1' : 'text-white py-1 hover:text-kuning hover:font-bold' }}">
                        <div class="w-6 object-center pl-5 ">
                            
                            <i id="icon-menu" class="fa-solid fa-gear"></i>
                        </div>
                        <span class="flex-1 ml-6 whitespace-nowrap">User</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="flex justify-center">
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" onclick="return confirm('Yakin ingin logout?')"
                class="text-black bg-kuning rounded px-2 py-1 hover:text-black hover:-mt-1 hover:shadow-lg shadow text-center font-semibold">
                <i class="fas fa-sign-out-alt"></i> Logout
            </button>
        </form>
    </div>


</aside>
