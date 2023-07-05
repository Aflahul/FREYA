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
