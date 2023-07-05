{{-- @php
    $imageDirectory = 'asset/img/freya'; // Direktori gambar
    $imageFiles = glob(public_path($imageDirectory . '/*.*')); // Mendapatkan daftar file gambar
    
    $images = [];
    
    foreach ($imageFiles as $imageFile) {
        $imageName = basename($imageFile);
        $imagePath = asset($imageDirectory . '/' . $imageName);
    
        $images[] = [
            'src' => asset('asset/img/freya/1.jpeg' . $imageName),
            'alt' => 'Image ' . $imageName,
            'caption' => 'Caption for Image ' . $imageName,
        ];
    }
@endphp --}}

<section id="paket" class="relative bg-gelap h-full">
    <div class="container w-full py-10 items-center">
        <h2 class="text-2xl text-center text-white font-semibold mb-5">Paket Laundry</h2>
        <div class="border pt-9">
            <div class="swiper-container">
                <div class="swiper-wrapper space-x-1">
                    {{-- @foreach ($images as $image) --}}
                        <div class="swiper-slide">
                            <div class="max-w-sm">
                                <div class="relative pb-[75%]">
                                    {{-- <img class="absolute inset-0 w-full h-full object-contain" src="{{ $image->src }}"
                                        alt="{{ $image->alt }}"> --}}
                                </div>
                                {{-- <p class="text-center">{{ $image->caption }}</p> --}}
                            </div>
                        </div>
                    {{-- @endforeach --}}
                </div>
            </div>
            <div class="absolute top-14 right-20 mt-4 mr-4 flex items-center justify-between gap-2">
                <button class="bg-white text-violet-500 h-8 w-8 rounded-full" id="prevBtn">
                    <i class="fa-solid fa-arrow-left fa-md transform rotate-45"></i>
                </button>
                <button class="bg-belum text-violet-500 h-8 w-8 rounded-full" id="nextBtn">
                    <i class="fa-solid fa-arrow-right fa-md transform -rotate-45"></i>
                </button>
            </div>
        </div>
    </div>



    {{-- <div class="absolute top-14 right-20 mt-4 mr-4 flex items-center justify-between gap-2">
                    <button class="bg-white text-violet-500 h-8 w-8 rounded-full" id="prevSlideBtn">
                        <i class="fa-solid fa-arrow-left fa-md transform rotate-45"></i>
                    </button>
                    <button class="bg-belum text-violet-500 h-8 w-8  rounded-full" id="nextSlideBtn">
                        <i class="fa-solid fa-arrow-right fa-md transform -rotate-45"></i>
                    </button>
                </div> --}}

    <script>
        // Kode JavaScript untuk galeri
        document.addEventListener('DOMContentLoaded', function() {
            // Mendapatkan elemen tombol next dan back
            const nextBtn = document.getElementById('nextBtn');
            const prevBtn = document.getElementById('prevBtn');

            // Mendapatkan elemen gambar dan keterangan
            const images = document.querySelectorAll('.relative > img');
            const captions = document.querySelectorAll('.relative > p');

            // Mengatur jumlah gambar yang ingin ditampilkan
            const numVisibleImages = 3;

            // Mengatur indeks awal dan indeks batas atas
            let startIndex = 0;
            let endIndex = numVisibleImages - 1;

            // Mengubah gambar dan keterangan sesuai indeks saat ini
            function showImages(start, end) {
                // Menampilkan gambar dan keterangan sesuai indeks
                images.forEach((image, i) => {
                    if (i >= start && i <= end) {
                        image.classList.remove('hidden');
                    } else {
                        image.classList.add('hidden');
                    }
                });

                // Menampilkan keterangan sesuai indeks
                captions.forEach((caption, i) => {
                    if (i >= start && i <= end) {
                        caption.classList.remove('hidden');
                    } else {
                        caption.classList.add('hidden');
                    }
                });
            }

            // Mengatur event listener untuk tombol next
            nextBtn.addEventListener('click', () => {
                // Memeriksa apakah masih ada gambar yang belum ditampilkan
                if (endIndex < images.length - 1) {
                    startIndex++;
                    endIndex++;
                    showImages(startIndex, endIndex);
                }
            });

            // Mengatur event listener untuk tombol back
            prevBtn.addEventListener('click', () => {
                // Memeriksa apakah masih ada gambar yang belum ditampilkan
                if (startIndex > 0) {
                    startIndex--;
                    endIndex--;
                    showImages(startIndex, endIndex);
                }
            });

            // Menampilkan gambar dan keterangan pertama saat halaman dimuat
            showImages(startIndex, endIndex);
        });
    </script>
</section>
