/** @type {import('tailwindcss').Config} */
export default {
  content: [],
  theme: {
    extend: {},
  },
  plugins: [],
}

module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js",
    ],
    theme: {
        extend: {
            colors: {
                kuningpudar: "#FFF6D6",
                navbar1: "#4F8A8B",
                navbar2: "#78B7BB",
                navbar3: "#FFF1C1",
                
                tombol1: "#FD5F0E",
                w3: "#068FFF",
                w4: "#FFF6D6",
                kuning: "#FBD46D",
                belum:"#FD5F0E",
                sudah: "#4F8A8B",
                sedang: "#99BBFF",
                selesai: "#96FFF1",
                gelap: "#393E46",
                gelap1: "#07031A",
                tulisan: "#584848",
                latar:"#F4F6FF",
            garis: "#07031A",
            head:"#6F778A",
                card:"#FFFFFF",
                navbar:"#584848",
                sidebar: "#07031A",
                tabel:"#FFFFFF",
                
            },
            screens: {
                ss: '250px',
                xs: '350px',
                em: '450px',
                li:'550px',
                
            },
            width: {
        '500': '32rem', 
        
            },  
        },
    },
    plugins: [require("flowbite/plugin")],
    
    fontFamily: {
      'body': [
    'Inter', 
    'ui-sans-serif', 
    'system-ui', 
    '-apple-system', 
    'system-ui', 
    'Segoe UI', 
    'Roboto', 
    'Helvetica Neue', 
    'Arial', 
    'Noto Sans', 
    'sans-serif', 
    'Apple Color Emoji', 
    'Segoe UI Emoji', 
    'Segoe UI Symbol', 
    'Noto Color Emoji'
  ],
      'sans': [
    'Inter', 
    'ui-sans-serif', 
    'system-ui', 
    '-apple-system', 
    'system-ui', 
    'Segoe UI', 
    'Roboto', 
    'Helvetica Neue', 
    'Arial', 
    'Noto Sans', 
    'sans-serif', 
    'Apple Color Emoji', 
    'Segoe UI Emoji', 
    'Segoe UI Symbol', 
    'Noto Color Emoji'
  ]
    }
  }

