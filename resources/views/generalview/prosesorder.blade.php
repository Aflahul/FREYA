@extends('layout.index')

@section('content')
    <div class="p-4 mt-20 sm:ml-72">
        <!--pelanggan-->
        <div class="p-4 drop-shadow-lg relative overflow-x-auto">
            <div class="mb-3 flex items-center">
                <label for="rows" class="mr-2">Show :</label>
                <select id="rows" class="px-2 py-1 border rounded-[4px]">
                    <option value="5">5</option>
                    <option value="10">10</option>
                    <option value="15">15</option>
                </select>
                <label for="rows" class="ml-2">entries</label>
            </div>
            <div class="bg-white border-t-[6px] border-sudah rounded-[4px]">
                <table class="w-full text-sm text-left">
                    <thead>
                        <tr class="border-b-2">
                            <th scope="col" class="pt-6 pb-2 px-2 w-24 ">Kode Order</th>
                            <th scope="col" class="pt-6 pb-2 px-2">Pelanggan</th>
                            <th scope="col" class="pt-6 pb-2 px-2">Waktu Masuk</th>
                            <th scope="col" class="pt-6 pb-2 px-2">Total Item</th>
                            <th scope="col" class="pt-6 pb-2 px-2">Total Harga</th>
                            <th scope="col" class="pt-6 pb-2 px-2">Status</th>
                            <th scope="col" class="pt-6 pb-2 px-2 text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="p-2 w-24 text-lg font-bold uppercase">
                                <p class="text-sudah">a12345</p>
                            </td>
                            <td class="p-2 text-left ">
                                <p class="font-base text-base">Sebut Saja Mawar</p>
                            </td>
                            <td class="p-2 text-left  ">
                                <p class="p-2 ">12345678</p>
                            </td>
                            <td class="p-2 text-left ">
                                <p class="font-base text-base">0</p>
                            </td>
                            <td class="p-2 text-left ">
                                <p class="font-base text-base">Rp. </p>
                            </td>
                            <td class="p-2 text-left font-base  text-xs ">
                                <p class="m-1 px-3 py-1 w-fit bg-sedang rounded-xl">Sedang Cuci</p>
                            </td>
                            <td class="text-center text-belum">
                                <div class="h-auto flex  justify-center gap-4 ">
                                    <i class="fa-solid fa-arrow-up-right-from-square fa-x2 fa-2xl"></i>
                                    <i class="fa-solid fa-check-to-slot fa-2xl"></i>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
