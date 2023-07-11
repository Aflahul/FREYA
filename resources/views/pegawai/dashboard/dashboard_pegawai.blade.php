@extends('layout.index_pegawai')

@section('content')
    <div class="p-4 mt-20 sm:ml-72">
        <!--preview laporan Harian-->
        <div class="p-4">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-5 mb-5">
                <a href="#" class="overflow-hidden bg-white rounded-[4px] border-t drop-shadow-lg">
                    <div class="flex flex-col justify-between p-2 md:flex-row">
                        <div class="w-full p-3 rounded-t-[4px] bg-kuning md:w-auto md:rounded-[4px]">
                            <div class="w-11 py-3 flex justify-center text-white mx-auto">
                                <div>
                                    <i class="fas fa-water fa-2x" ></i>
                                </div>
                            </div>
                        </div>
                        <div class="text-center flex flex-col justify-between md:text-right">
                            <h5 class="text-3xl font-bold tracking-tight pt-1">1</h5>
                            <p class="font-normal">Cucian</p>
                        </div>
                    </div>
                </a>
                <a href="#" class="overflow-hidden bg-white rounded-[4px] border-t drop-shadow-lg">
                    <div class="flex flex-col justify-between p-2 md:flex-row">
                        <div class="w-full p-3 rounded-t-[4px] bg-kuning md:w-auto md:rounded-[4px] flex justify-center">
                            <div class="w-11 py-3 flex justify-center text-white mx-auto">
                                <div>
                                    <i class="fas fa-users fa-2x"></i>
                                </div>
                            </div>
                        </div>
                        <div class="text-center flex flex-col justify-between md:text-right">
                            <h5 class="text-3xl font-bold tracking-tight pt-1">1</h5>
                            <p class="font-normal">Cucian</p>
                        </div>
                    </div>
                </a>
                <a href="#" class="overflow-hidden bg-white rounded-[4px] border-t drop-shadow-lg">
                    <div class="flex flex-col justify-between p-2 md:flex-row">
                        <div class="w-full p-3 rounded-t-[4px] bg-kuning md:w-auto md:rounded-[4px] flex justify-center">
                            <div class="w-11 py-3 flex justify-center text-white mx-auto">
                                <div>
                                    <i class="fa-solid fa-chart-line fa-2x"></i>
                                </div>
                            </div>
                        </div>
                        <div class="text-center flex flex-col justify-between md:text-right">
                            <h5 class="text-3xl font-bold tracking-tight pt-1">1</h5>
                            <p class="font-normal">Cucian</p>
                        </div>
                    </div>
                </a>
                <a href="#" class="overflow-hidden bg-white rounded-[4px] border-t drop-shadow-lg">
                    <div class="flex flex-col justify-between p-2 md:flex-row">
                        <div class="w-full p-3 rounded-t-[4px] text-white bg-kuning md:w-auto md:rounded-[4px] flex justify-center">
                            <div class="w-11 py-3 flex justify-center mx-auto">
                                <div>
                                    <i class="fas fa-donate fa-2x"></i>
                                </div>
                            </div>
                        </div>
                        <div class="text-center flex flex-col justify-between md:text-right">
                            <h5 class="text-3xl font-bold tracking-tight pt-1">1</h5>
                            <p class="font-normal">Cucian</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="p-4">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-5 mb-5 drop-shadow-lg">
                <!--preview Transaksi-->
                <div class="relative overflow-x-auto">
                    <div class="bg-white border-t-[6px] border-sudah rounded-[4px]">
                        <table class="w-full text-sm text-left">
                            <thead>
                                <div class="p-4 border-b-2 flex justify-between items-center">
                                    <h1 class="font-bold">Daftar Transaksi Harian</h1>
                                    <a href="/laporan"
                                        class="bg-kuning hover:bg-yellow-500 font-medium rounded-xl text-sm px-5 py-2">Details</a>
                                </div>
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        Tanggal
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-center">
                                        Transaksi
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-right">
                                        Total
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        12/02/2023
                                    </th>
                                    <td class="px-6 py-4 text-center">
                                        0
                                    </td>
                                    <td class="px-6 py-4 text-right">
                                        Rp. 00000
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        12/02/2023
                                    </th>
                                    <td class="px-6 py-4 text-center">
                                        0
                                    </td>
                                    <td class="px-6 py-4 text-right">
                                        Rp. 00000
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        12/02/2023
                                    </th>
                                    <td class="px-6 py-4 text-center">
                                        0
                                    </td>
                                    <td class="px-6 py-4 text-right">
                                        Rp. 00000
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        12/02/2023
                                    </th>
                                    <td class="px-6 py-4 text-center">
                                        0
                                    </td>
                                    <td class="px-6 py-4 text-right">
                                        Rp. 00000
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!--pelanggan-->
                <div class="relative overflow-x-auto">
                    <div class="bg-white border-t-[6px] border-sudah rounded-[4px]">
                        <table class="w-full text-sm text-left">
                            <thead>
                                <div class="p-4 border-b-2 flex justify-between items-center">
                                    <h1 class="font-bold">Data Pelanggan</h1>
                                    <a href="/pelanggan"
                                        class="bg-kuning hover:bg-yellow-500 font-medium rounded-xl text-sm px-5 py-2">Details</a>
                                
                                </div>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="w-10 py-4">
                                        <div class="pl-4">
                                            <i class="fas fa-user-circle fa-3x" style="color: #4c4c4b;"></i>
                                        </div>
                                    </td>
                                    <td class="py-4 text-left px-2">
                                        <p class="font-bold text-base">Sebut Saja Mawar</p>
                                        <p class="font-light">08114488396</p>
                                    </td>
                                    <td class="px-4 py-4 text-right">
                                        <p class="font-bold text-base">99</p>
                                        <p class="font-light">Total transaksi</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="w-10 py-4">
                                        <div class="pl-4">
                                            <i class="fas fa-user-circle fa-3x" style="color: #4c4c4b;"></i>
                                        </div>
                                    </td>
                                    <td class="py-4 text-left px-2">
                                        <p class="font-bold text-base">Sebut Saja Mawar</p>
                                        <p class="font-light">08114488396</p>
                                    </td>
                                    <td class="px-4 py-4 text-right">
                                        <p class="font-bold text-base">99</p>
                                        <p class="font-light">Total transaksi</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="w-10 py-4">
                                        <div class="pl-4">
                                            <i class="fas fa-user-circle fa-3x" style="color: #4c4c4b;"></i>
                                        </div>
                                    </td>
                                    <td class="py-4 text-left px-2">
                                        <p class="font-bold text-base">Sebut Saja Mawar</p>
                                        <p class="font-light">08114488396</p>
                                    </td>
                                    <td class="px-4 py-4 text-right">
                                        <p class="font-bold text-base">99</p>
                                        <p class="font-light">Total transaksi</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
