<section id="laundrycare" class="bg-white shadow-2xl inset-y ">
    <div class="container  py-2 md:px-10 mx-auto h-fit ">
        <div class="max-w-screen ">
            <p class="py-2 font-semibold text-3xl ">LaundryCare</p>
            <p class="py-1 font-medium   text-lg">Menyajikan informasi tips & trick menjaga keawetan hubungan.
            <div class="flex place-content-start place-items-center pt-10 gap-5 text-white ">
                <div class="scroll-arrow left  hover:text-gelap  ">
                    <i class="fa-solid fa-chevron-left fa-2xl"></i>
                </div>
                <div
                    class="flex justify-between gap-5 overflow-x-auto overscroll-none py-5 max-w-screen drop-shadow-2xl inset-y hide-scrollbar">
                    @foreach ($artikel as $data)
                        <div
                            class="min-w-[18rem] max-w-[18rem]  bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                            <a href="#">
                                @if ($data->foto)
                                        <img class=" min-w-[18rem] max-w-[18rem] rounded-t-lg max-h-32 min-h-32" src="{{ asset('storage/' . $data->foto) }}"
                                            alt="logo">
                                    @else
                                        <img class=" min-w-[18rem] max-w-[18rem] rounded-t-lg max-h-32 min-h-32 " src="{{ asset('assets/img/default-img.jpg') }}"
                                            alt="default logo">
                                    @endif
                            </a>
                            <div class="px-5 pb-2">
                                <a href="#">
                                    <h6 class="text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                                        {{ $data->judul }}</h6>
                                        <span class="mb-1 text-[9px] font-light font-italic ">{{ $data->created_at }}</span>
                                </a>
                                <p class="mb-2 font-xs text-gray-700 dark:text-gray-400 break-words">{{ \Illuminate\Support\Str::limit($data->Isi, 100) }}...
                                </p>
                                <div class="place-items-end place-content-end  ">
                                    <a href="#"
                                        class="inline-flex items-center place-content-end px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                        Selengkapnya                                      
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="scroll-arrow right  hover:text-gelap  ">
                    <i class="fa-solid fa-chevron-right fa-2xl"></i>
                </div>
            </div>
        </div>



    </div>
    {{-- <script>
        const scrollContainer = document.querySelector('.overflow-x-auto');
        const scrollLeftBtn = document.querySelector('.scroll-arrow.left');
        const scrollRightBtn = document.querySelector('.scroll-arrow.right');

        scrollLeftBtn.addEventListener('click', () => {
            scrollContainer.scrollBy({
                left: -100,
                behavior: 'smooth'
            });
        });

        scrollRightBtn.addEventListener('click', () => {
            scrollContainer.scrollBy({
                left: 100,
                behavior: 'smooth'
            });
        });
    </script> --}}

</section>
