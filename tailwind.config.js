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
                navbar1: "#808B97",
                navbar2: "#78B7BB",
                navbar3: "#FFF1C1",
                
                tombol1: "#FD5F0E",
                w3: "#068FFF",
                w4: "#FFF6D6",
                kuning: "#FCD51E",
                belum:"#FD5F0E",
                sudah: "#084A83",
                sedang: "#99BBFF",
                selesai: "#96FFF1",
                gelap: "#393E46",
                tulisan: "#584848",
                latar:"#FFF1C1",
            garis: "#FFCE63",
            head:"#6F778A",
                card:"#FFFFFF",
                navbar:"#584848",
                sidebar: "#393C45",
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

