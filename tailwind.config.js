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
                kuning: "#FCD51E",
                belum:"#FD5F0E",
                sudah: "#084A83",
                sedang: "#99BBFF",
                selesai: "#96FFF1",
                gelap: "#393E46",
                tulisan: "#0B409C",
                latar:"#F2F7FF",
                garis:"#FFCE63",
                card:"#FAFCFD",
                navbar:"#539DDB",
                sidebar: "#FAFCFD",
                tabel:"#FAFCFD",
                
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

