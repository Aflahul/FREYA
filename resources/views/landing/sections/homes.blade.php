<section id="home" class="bg-kuningpudar ">
    <!-- Konten Home -->
    <div class="container mt-5 w-screen py-10 md:px-10 mx-auto h-fit">
        <div class="flex flex-col">
            <div class="pt-5 flex justify-between gap-5">
                <figure class="">
                    <a href="#">
                        <img class="object-cover rounded drop-shadow-md" src="asset/img/freya/2.jpeg" alt="image description">
                    </a>
                </figure>
                <figure class="mt-10  ">
                    <a href="#">
                        <img class="object-cover rounded drop-shadow-md" src="asset/img/freya/3.jpeg" alt="image description">
                    </a>
                </figure>
                <figure class=" ">
                    <a href="#">
                        <img class="object-cover rounded drop-shadow-md" src="asset/img/freya/6.jpeg" alt="image description">
                    </a>
                </figure>
                <figure class="mt-10  ">
                    <a href="#">
                        <img class="object-cover rounded drop-shadow-md" src="asset/img/freya/5.jpeg" alt="image description">
                    </a>
                </figure>
            </div>
            <div class=" ">
            <p class="py-5 font-semibold text-5xl">{{ $profil->nama_laundry }}</p>
                <p class="py-2 font-medium  text-lg">{{ $profil->tagline }}
            
                </p>
                <p class="pb-5 font-normal text-sm">{{ $profil->desk }} </p>
                <a class=" p-2 bg-belum rounded-md  text-white " href="">Pesan Sekarang</a>
            </div>
        </div>
    </div>
</section>
