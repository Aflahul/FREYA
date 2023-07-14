<div class="fixed sm:pl-[18rem] top-3 w-full pr-8 px-4 ">
    <nav class="bg-navbar1 rounded-[5px] drop-shadow">
        <div class="max-w-screen-xl flex flex-wrap justify-between px-4 py-2 items-center">
            <p class="text-2xl font-bold text-white">Freya Laundry</p>
            <div class="flex items-center">
                <i class="fas fa-user-circle fa-xl text-white px-4"></i>
                <div class="text-xl font-semibold rounded-md p-1 text-white">{{ $jam }}</div>
            </div>
        </div>
    </nav>
</div>

{{-- < class="overflow-x-auto border">
            <div class="flex items-center rounded-md h-24 bg-navbar  lg:px-2 lg:pl-2">
                <div>
                    <div class="flex items-center justify-start">
                        <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar"
                            aria-controls="logo-sidebar" type="button"
                            class="inline-flex items-center rounded-lg sm:hidden">
                            <div class="px-2 items-center">
                                <i class="fas fa-bars"></i>
                            </div>
                        </button>
                        <a href="/dashboard" class="flex ml-3 h-10 md:mr-24">
                            <span
                                class="self-center text-xl font-bold sm:text-xl whitespace-nowrap text-white ">{{ $title }}</span>
                        </a>
                    </div>
                </div>
                <div class="justify-content-end flex items-center gap-5">
                    <button type="button"
                        class="relative px-1 inline-flex items-center text-sm font-medium text-center text-white rounded-lg hover:bg-yellow-400">
                        <i class="far fa-envelope fa-2x"></i>
                        <span class="sr-only">Notifications</span>
                        <div
                            class="absolute inline-flex items-center justify-center w-4 h-4 text-[8px] font-bold text-white bg-red-500 rounded-full -top-1 -right-2">
                            20</div>
                    </button>
                    {{-- <img class="h-10 pr-4" src="{{ asset('asset/img/logo.jpg') }}" alt="logo"> --}}
