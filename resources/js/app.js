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
// import 'tinymce/themes/silver';
// import 'tinymce/plugins/advlist';
// import 'tinymce/plugins/lists';
// import 'tinymce/plugins/anchor';
// Import plugin lain yang dibutuhkan

// Inisialisasi TinyMCE
tinymce.init({
  selector: '.tinymce-editor', // Pilih elemen yang akan diubah menjadi editor
  plugins: [
    'advlist lists anchor', // Daftar plugin yang akan digunakan
    // Tambahkan plugin lain yang dibutuhkan
  ],
  toolbar: 'undo redo | bold italic | bullist numlist outdent indent | link anchor', // Toolbar yang ditampilkan
  menubar: false, // Menonaktifkan menubar TinyMCE
  autoresize: true,
  height: 200,
});
