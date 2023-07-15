@extends('layout.index')

@section('content')
    <div class="p-4 mt-20 sm:ml-72">
        <div class="p-4 drop-shadow-lg relative overflow-x-auto">
            <form action="/createOrder">
                <button type="submit"
                class="flex items-center gap-3 bg-kuning hover:bg-yellow-500 font-medium rounded-xl text-sm px-3 py-2">
                <i class="fa-solid fa-circle-plus "></i>
                <p>Tambah Orderan</p>
            </button>
            </form>
            
        </div>
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
                            <th scope="col" class="pt-6 pb-2 px-2">Jenis Laundry</th>
                            <th scope="col" class="pt-6 pb-2 px-2">Waktu Masuk</th>
                            <th scope="col" class="pt-6 pb-2 px-2">Durasi</th>
                            <th scope="col" class="pt-6 pb-2 px-2">Qty</th>
                            <th scope="col" class="pt-6 pb-2 px-2">Total Harga</th>
                            <th scope="col" class="pt-6 pb-2 px-2 ">Status</th>
                            <th scope="col" class="pt-6 pb-2 px-2 text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>  
                        @foreach ($data as $item)
                            <tr>
                            <td class="p-2 w-24 text-lg font-bold uppercase">
                                <p class="text-sudah">{{ $item->kd_order }}</p>
                            </td>
                            <td class="p-2 text-left ">
                                <p class="font-base text-base">{{ $item->namapel }}</p>
                            </td>
                            <td class="p-2 text-left  bg-selesai">
                                <p class="">{{ $item->nama_layanan }}</p>
                            </td>
                            <td class="px-2  text-left ">
                                <p class="font-base text-base">{{ $item->created_at }}</p>
                                {{-- <p class="font-base text-base">Selesai : -</p>
                                <p class="font-base text-base">Diambil : -</p> --}}
                            </td>
                             <td class="p-2 text-left  bg-selesai">
                                <p class=""> <span>{{ $item->durasi }}</span> Hari </p>
                            </td>
                            <td class="p-2 text-left ">
                                <p class="font-base text-base"> <span>{{ $item->qty }}</span> 
                                <span>{{ $item->satuan }}</span></p>
                            </td>
                            <td class="p-2 text-left ">
                                <p class="font-base text-base">Rp. <span>{{ $item->total }}</span></p>
                            </td>
                            <td class="p-2 font-base text-white text-xs text-center ">
                                <p class="m-1 px-3 pb-1 w-fit bg-sudah rounded-xl">{{ $item->status }}</p>
                                {{-- <p class="m-1 px-3 py-1 w-fit bg-sudah rounded-xl">Sudah Bayar</p>
                                <p class="m-1 px-3 pt-1 w-fit bg-belum rounded-xl">Belum Ambil </p> --}}
                            </td>
                            <td class="text-center text-belum">
                                <div class="h-auto flex  justify-center gap-4 ">
                                    <i class="fa-solid fa-pen fa-lg"></i>
                                    <i class="fa-solid fa-arrow-up-right-from-square fa-x2 fa-lg"></i>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
