<section id="laundrycare" class="bg-white shadow-2xl inset-y w-screen ">
    <div class="container py-3 max-w-screen-xl items-center justify-between mx-auto px-7 h-fit ">
        <div class="max-w-screen ">
            <p class="py-2 font-semibold text-2xl ">LaundryCare</p>
            <p class="py-1 font-medium   text-lg">Menyajikan informasi tips & trick menjaga keawetan hubungan.
            <div class="flex place-content-start place-items-center pt-10 gap-5 text-white ">
                <div id="panahkiri" class="scroll-arrow left text-gray-200 hover:text-sudah hidden lg:block   ">
                    <i class="fa-solid fa-chevron-left fa-2xl"></i>
                </div>
                <div id="cardartikel"
                    class="flex justify-between gap-5 overflow-x-auto overscroll-none py-5 max-w-screen drop-shadow-2xl inset-y hide-scrollbar">
                    @foreach ($artikel as $data)
                        <a href="#"
                            class="min-w-[18rem] max-w-[18rem] bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 article-link"
                            data-title="{{ $data->judul }}" data-date="{{ $data->created_at }}"
                            data-content="{{ htmlspecialchars_decode($data->Isi) }}">
                            <div id="gambar">
                                @if ($data->foto)
                                    <img class=" min-w-[18rem] max-w-[18rem] rounded-t-lg max-h-32 min-h-32"
                                        src="{{ asset('storage/' . $data->foto) }}" alt="logo">
                                @else
                                    <img class=" min-w-[18rem] max-w-[18rem] rounded-t-lg max-h-32 min-h-32 "
                                        src="{{ asset('assets/img/default-img.jpg') }}" alt="default logo">
                                @endif
                            </div>
                            <div class="px-5 pb-2 text-black">
                                <p id="judul"
                                    class="text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                                    {{ $data->judul }}</p>
                                <p id="tanggal" class="mb-1 text-[9px] font-light font-italic ">
                                    {{ $data->created_at }}</p>
                                <p id="Isi">{!! Str::limit(htmlspecialchars_decode($data->Isi), 150) !!}</p>
                            </div>
                        </a>
                    @endforeach
                </div>
                <div id="panahkanan" class="scroll-arrow right text-gray-200 hover:text-sudah hidden lg:block  ">
                    <i class="fa-solid fa-chevron-right fa-2xl object-cover"></i>
                </div>
            </div>
        </div>
    </div>
    <!-- Komponen Modal -->
    <div id="modal" class="fixed inset-0 flex justify-center items-center bg-black bg-opacity-50 hidden">
        <div class="bg-white p-8 rounded-lg shadow-lg max-w-[60rem] min-w-[50rem] max-h-[35rem] overflow-y-auto">
            <!-- Konten Modal -->
            <p id="modalTitle" class="text-2xl font-semibold mb-4"></p>
            <p id="modalDate" class="text-xs mb-2"></p>
            <div id="modalImage" class="mb-4">
                <img src="" alt="Modal Image"
                    class=" w-full overflow-y-hidden object-cover max-h-[15rem] rounded-lg">
            </div>
            <p id="modalContent"></p>

            <!-- Tombol Tutup -->
            <button id="modalClose" class="mt-4 py-2 px-4 bg-gray-800 text-white rounded-lg">Tutup</button>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const articleLinks = document.querySelectorAll(".article-link");
            const modal = document.getElementById("modal");
            const modalTitle = document.getElementById("modalTitle");
            const modalDate = document.getElementById("modalDate");
            const modalImage = document.getElementById("modalImage").querySelector("img");
            const modalContent = document.getElementById("modalContent");
            const modalClose = document.getElementById("modalClose");
            const cardContainer = document.getElementById('cardartikel');
            const leftArrow = document.getElementById('panahkiri');
            const rightArrow = document.getElementById('panahkanan');

            // Fungsi untuk menggerakkan container ke kiri
            function scrollLeft() {
                cardContainer.scrollLeft -= 200; // Sesuaikan dengan lebar konten yang ingin digerakkan
            }

            // Fungsi untuk menggerakkan container ke kanan
            function scrollRight() {
                cardContainer.scrollLeft += 200; // Sesuaikan dengan lebar konten yang ingin digerakkan
            }

            // Tambahkan event listener untuk tombol panah kiri
            leftArrow.addEventListener('click', scrollLeft);

            // Tambahkan event listener untuk tombol panah kanan
            rightArrow.addEventListener('click', scrollRight);

            // Fungsi untuk menutup modal
            function closeModal() {
                modal.classList.add("hidden");
            }

            // Tambahkan event listener untuk tombol tutup
            modalClose.addEventListener("click", closeModal);

            // Tambahkan event listener untuk latar belakang gelap (menutup modal ketika di klik di luar konten modal)
            modal.addEventListener("click", function(event) {
                if (event.target === modal) {
                    closeModal();
                }
            });

            articleLinks.forEach(link => {
                link.addEventListener("click", function(event) {
                    event.preventDefault();
                    const title = this.dataset.title;
                    const date = this.dataset.date;
                    const content = this.dataset.content;
                    const imageSrc = this.querySelector("img").getAttribute("src");

                    modalTitle.textContent = title;
                    modalDate.textContent = date;
                    modalImage.setAttribute("src", imageSrc); // Set the image source
                    modalContent.innerHTML = content;
                    modal.classList.remove("hidden");
                });
            });
        });
    </script>



</section>
