import './bootstrap';
import 'flowbite';
import SmoothScroll from 'smooth-scroll';
const scroll = new SmoothScroll('a[href*="#"]', {
    speed: 900, // Kecepatan scroll dalam milidetik
    speedAsDuration: true,
    offset: 50, // Jarak offset dari elemen target
});
import Swiper from 'swiper/bundle';
import 'swiper/swiper-bundle.css';

// Import tema atau plugin tambahan yang Anda butuhkan
// Import TinyMCE core
import 'tinymce/tinymce';
// Import tema TinyMCE (opsional, pilih salah satu)
import 'tinymce/themes/silver'; // Tema silver
// import 'tinymce/themes/mobile'; // Tema mobile
// Import ikon TinyMCE (opsional)
import 'tinymce/icons/default';
// Import plugin-plugin yang diperlukan (tambahkan sesuai kebutuhan)
import 'tinymce/plugins/advlist';
import 'tinymce/plugins/lists';
import 'tinymce/plugins/anchor';
// Dan plugin lain yang diperlukan

// Inisialisasi TinyMCE
tinymce.init({
  selector: '.tinymce-editor', // Pilih elemen yang akan diubah menjadi editor
    plugins: [
    'advlist lists anchor', // Daftar plugin yang akan digunakan (advlist untuk numbering dan bullet list, lists untuk pengaturan heading)
    'table', // Plugin untuk tabel
    'image', // Plugin untuk gambar
    'link', // Plugin untuk link
    'paste', // Plugin untuk menangani paste teks dari clipboard
  ],
  toolbar: 'undo redo | formatselect | bold italic | alignleft aligncenter alignright | numlist bullist | outdent indent | link anchor | table image', // Toolbar yang ditampilkan
  
  menubar: false, // Menonaktifkan menubar TinyMCE
  autoresize: true,
  height: 200,
  
});
// resources/js/app.js
function displayCopyright() {
    console.log('© ' + new Date().getFullYear() + ' AFLAHUL MUKMIN. All rights reserved.');
}
