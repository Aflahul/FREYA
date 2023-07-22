@extends('layout.index')

@section('content')
    <div class="p-4 mt-20 sm:ml-72">
        <!--KAS-->
        <div class="p-4 drop-shadow-lg relative overflow-x-auto">
            <div class="mb-5 flex flex-row items-center object-center justify-between ">
                <div class="flex items-center">
                    <label for="rows" class="mr-2">Show :</label>
                    <select id="rows" class="px-2 py-1 border rounded-[4px]">
                        <option value="5">5</option>
                        <option value="10">10</option>
                        <option value="15">15</option>
                    </select>
                    <label for="rows" class="ml-2">entries</label>
                </div>
                <div class="flex object-right text-belum">
                    <i class="fa-solid fa-print fa-xl"></i>
                </div>
            </div>
            <div class="bg-white border-t-[6px] border-sudah rounded-[4px]">
                <table class="w-full text-sm text-left">
                    <thead>
                        <tr class="border-b-2">
                            <th scope="col" class="pt-6 pb-2 px-2 w-24 ">Kode x</th>
                            <th scope="col" class="pt-6 pb-2 px-2">Waktu</th>
                            <th scope="col" class="pt-6 pb-2 px-2">Asal</th>
                            <th scope="col" class="pt-6 pb-2 px-2">Arus</th>
                            <th scope="col" class="pt-6 pb-2 px-2">Total </th>
                            <th scope="col" class="pt-6 pb-2 px-2">Saldo</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="p-2 w-40 text-lg font-bold uppercase">
                                <p class="text-sudah">a12345</p>
                            </td>
                            <td class="p-2 text-left ">
                                <p class="">Sebut Saja Mawar</p>
                            </td>
                            <td class="p-2 text-left  ">
                                <p class="">12345678</p>
                            </td>
                            <td class="p-2 text-left ">
                                <p class="">0</p>
                            </td>
                            <td class="p-2 text-left ">
                                <p class="">Rp. </p>
                            </td>
                            <td class="p-2 text-left font-base  text-xs ">
                                <p class="">Sedang Cuci</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
