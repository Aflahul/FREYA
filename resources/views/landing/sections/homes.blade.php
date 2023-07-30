<section id="home" class="bg-kuningpudar w-screen ">
    <!-- Konten Home -->
    <div class="container mt-5 max-w-screen-xl py-10 items-center justify-between mx-auto px-7 h-fit">
        <div class="flex flex-col">
            <div class="pt-5 flex justify-between gap-5">
                <figure class="">
                    <a href="#">
                        <img class="object-cover rounded drop-shadow-md" src="asset/img/freya/2.jpeg"
                            alt="image description">
                    </a>
                </figure>
                <figure class="mt-10  ">
                    <a href="#">
                        <img class="object-cover rounded drop-shadow-md" src="asset/img/freya/3.jpeg"
                            alt="image description">
                    </a>
                </figure>
                <figure class=" ">
                    <a href="#">
                        <img class="object-cover rounded drop-shadow-md" src="asset/img/freya/6.jpeg"
                            alt="image description">
                    </a>
                </figure>
                <figure class="mt-10  ">
                    <a href="#">
                        <img class="object-cover rounded drop-shadow-md" src="asset/img/freya/5.jpeg"
                            alt="image description">
                    </a>
                </figure>
            </div>
            <div class=" ">
                <p class="py-5 font-semibold text-3xl">{{ $profil->nama_laundry }}</p>
                
                <div class="pb-5  text-sm">{!! html_entity_decode($profil->desk) !!} </div>
                <a class=" p-2 bg-belum rounded-md  text-white " href="https://wa.me/{{ $profil->kontak }}?text=Assalamualaikum%20Freya%20Laundry!%0ASaya%20ingin%20menggunakan%20jasa%20anda%2C%20apakah%20bisa%20jemput%20sekarang%3F"
                                        >Pesan Sekarang</a>
            </div>
        </div>
    </div>
</section>
