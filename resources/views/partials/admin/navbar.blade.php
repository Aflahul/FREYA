<div class="fixed top-0 w-full z-40 ">
    <nav class="bg-kuning sm:pl-[18rem] drop-shadow text-gray-950 pr-8">
        <div class="max-w-screen-xl flex flex-wrap justify-between py-2 items-center">
            <p class="text-xl pl-3 font-bold ">{{ $title }}</p>
            <div class="flex items-center">
                <i class="fas fa-user-circle fa-xl"></i>
                <span class="ml-2 font-semibold ">{{ ucfirst(auth()->user()->username) }}</span>
                
                <div class=" font-semibold rounded-md p-1 mx-2">{{ $jam }}</div>
                <div class="">

                    <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="text-red-500 hover:text-red-700">
                                <i class="fas fa-sign-out-alt"></i>
                            </button>
                        </form>
                </div>
            </div>
        </div>
    </nav>
</div>
