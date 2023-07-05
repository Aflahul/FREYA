<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body >
<div class=" bg-white block max-w-full">
 <div class= "bg-[#FFFAE9] block max-w-full px-16">
    <nav >
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between pt-5 ">
     <img src="asset/img/logo.jpg" class="h-8 mr-3" alt="Freya Logo" />
      <div class="hidden w-full md:block md:w-auto" id="navbar-default">
        <ul class="font-medium flex flex-col mt-4  pl-6 md:flex-row md:space-x-10 ">
          <li>
            <a href="#" class="block py-2 pl-4  text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-white md:dark:text-blue-500" aria-current="page">Home</a>
          </li>
          <li>
            <a href="#" class="block py-2 pl-4  text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Lokasi</a>
          </li>
          <li>
            <a href="#" class="block py-2 pl-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Paket</a>
          </li>
          <li>
            <a href="#" class="block py-2 pl-4  text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Artikel</a>
          </li>
          <li>
            <a href="#" class="block py-2 pl-4  text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Cek Laundry</a>
          </li>
          <li>
            <a href="#" class="block py-2 pl-4  text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Tentang</a>
          </li>
        </ul>
      </div>
  </nav>
  <!--SECTION HOME-->
    <div class="flex flex-col w-full md:block md:w-auto pt-8">
        <ul class="flex flex-col md:flex-row md:space-x-8 md:mt-0 md:border-0 md:p-5">
         <li><img class= "max-h-96 max-w-52 rounded   " src="asset/img/1.jpg"  alt="" />
          </li>
         <li><img class= "max-h-96 max-w-52 rounded  "src="asset/img/2.jpg"  alt="" />
          </li>
         <li><img class= "max-h-96 max-w-52 rounded  "src="asset/img/3.jpg"  alt="" />
          </li>
         <li><img class= "max-h-96 max-w-52 rounded  "src="asset/img/4.jpg"  alt="" />
          </li>
    </div>
    <div>
        <p class="mt-3 mb-3 text-6xl  text-black-500 md:text-6xl dark:text-gray-400 ">Freya Laundry.</p>
        <p class="text-gray-500 dark:text-gray-400">Track work across the enterprise through an open, collaborative platform. Link issues across Jira and ingest data from other software development tools, so your IT support and operations teams have richer contextual information to rapidly respond to requests, incidents, and changes.</p>
    </div>
    <div>
        <button type="button" class="text-white bg-orange-500  hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Pesan Jasa Pick Up</button>
    </div>
 </div>
</div>
<!--Section paket Laundry-->
<div class=" bg-gray-800   h-96"> 
 <div class= "bg-gray-800  px-16">
    <p class=" mb-3 text-2xl  text-white md:text-6xl dark:text-white ">Paket Laundry</P>
 </div>
</div>
    <div class= "px-16">
    <div class="flex flex-col w-full md:block md:w-auto md:-mt-40">
        <ul class="flex flex-col md:flex-row md:space-x-8 md:mt-0 md:border-0 md:p-5">
         <li><img class= "max-h-96 max-w-52 rounded   " src="asset/img/1.jpg"  alt="" />
          </li>
         <li><img class= "max-h-96 max-w-52 rounded  "src="asset/img/2.jpg"  alt="" />
          </li>
          <li><img class= "max-h-96 max-w-52 rounded  "src="asset/img/2.jpg"  alt="" />
          </li>
        </ul>
 </div>
</div> 
 <!--Section Artikel-->
 <div class=" h-96"> 
  <div class= " px-16">
    <p class=" mb-3 text-2xl  text-black md:text-6xl dark:text-black ">Artikel</P>
    <div class="flex flex-col w-full md:block md:w-auto pt-8">
        <ul class="flex flex-col md:flex-row md:space-x-8 md:mt-0 md:border-0 md:p-5">
         <li><img class= "max-h-96 max-w-52 rounded   " src="asset/img/1.jpg"  alt="" />
          </li>
         <li><img class= "max-h-96 max-w-52 rounded  "src="asset/img/2.jpg"  alt="" />
          </li>
        </ul>
    </div>
   </div>
 </div>
  <!--Section Artikel-->
  <div class="bg-[#FFD369] h-96"> 
    <div class= "px-16">
      
<ol class="flex items-center w-full">
    <li class="flex w-full items-center text-blue-600 dark:text-blue-500 after:content-[''] after:w-full after:h-1 after:border-b after:border-blue-100 after:border-4 after:inline-block dark:after:border-blue-800">
        <span class="flex items-center justify-center w-10 h-10 bg-blue-100 rounded-full lg:h-12 lg:w-12 dark:bg-blue-800 shrink-0">
            <svg aria-hidden="true" class="w-5 h-5 text-blue-600 lg:w-6 lg:h-6 dark:text-blue-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
        </span>
    </li>
    <li class="flex w-full items-center after:content-[''] after:w-full after:h-1 after:border-b after:border-gray-100 after:border-4 after:inline-block dark:after:border-gray-700">
        <span class="flex items-center justify-center w-10 h-10 bg-gray-100 rounded-full lg:h-12 lg:w-12 dark:bg-gray-700 shrink-0">
            <svg aria-hidden="true" class="w-5 h-5 text-gray-500 lg:w-6 lg:h-6 dark:text-gray-100" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 2a1 1 0 00-1 1v1a1 1 0 002 0V3a1 1 0 00-1-1zM4 4h3a3 3 0 006 0h3a2 2 0 012 2v9a2 2 0 01-2 2H4a2 2 0 01-2-2V6a2 2 0 012-2zm2.5 7a1.5 1.5 0 100-3 1.5 1.5 0 000 3zm2.45 4a2.5 2.5 0 10-4.9 0h4.9zM12 9a1 1 0 100 2h3a1 1 0 100-2h-3zm-1 4a1 1 0 011-1h2a1 1 0 110 2h-2a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
        </span>
    </li>
    <li class="flex items-center w-full">
        <span class="flex items-center justify-center w-10 h-10 bg-gray-100 rounded-full lg:h-12 lg:w-12 dark:bg-gray-700 shrink-0">
            <svg aria-hidden="true" class="w-5 h-5 text-gray-500 lg:w-6 lg:h-6 dark:text-gray-100" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"></path><path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm9.707 5.707a1 1 0 00-1.414-1.414L9 12.586l-1.293-1.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
        </span>
    </li>
</ol>



    </div>
  </div>

</body>
</html>