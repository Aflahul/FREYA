<section id="lokasi" class=" ">
    <div class="container  py-2 md:px-10 mx-auto h-fit ">
        <div class="max-w-screen  ">
            <p class="py-1 font-semibold text-2xl ">Lokasi Kami</p>
            <p class=" font-medium   text-lg">Lokasi kami mudah dijangkau.
            <div class="flex place-content-start place-items-center py-2 gap-5  ">
                {{-- <img src="asset\img\freya\aaa.jpg" class="cover border" alt=""> --}}
                <div id="map" class="w-full h-64"></div>
            </div>
        </div>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                // Inisialisasi peta
                var map = L.map('map').setView([{{ $profil->latitude }}, {{ $profil->longitude }}], 13);

                // Tambahkan layer peta dari OpenStreetMap
                L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png').addTo(map);

                // Tambahkan marker lokasi dari data alamat yang dikirim dari kontroler
                var marker = L.marker([{{ $profil->latitude }}, {{ $profil->longitude }}]).addTo(map);
            });
        </script>
</section>

<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />



<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
<script>
    // Skrip JavaScript sebelumnya yang telah diberikan sebelumnya
</script>
