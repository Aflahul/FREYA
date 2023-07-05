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


