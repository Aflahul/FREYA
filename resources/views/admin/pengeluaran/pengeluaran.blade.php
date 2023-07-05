@extends('layout.index')

@section('content')
    <div class="p-4 mt-20 sm:ml-72">
        <div class="p-4 drop-shadow-lg relative ">
        <a type="button" id="tambahPengeluaranButton"
            class="flex items-center gap-3 bg-kuning hover:bg-yellow-500 font-medium rounded-xl text-sm px-3 py-2 w-fit"
            href="/createPengeluaran">
            <i class="fa-solid fa-circle-plus"></i>
            <p>Tambah Pengeluaran</p>
        </a>
        </div>
        <!--pengeluaran-->
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
                <table class="p-2 w-full text-sm text-left overflow-x-auto ">
                    <thead>
                        <tr class="border-b-2">
                            <th scope="col" class="pt-6 pb-2 px-2 w-24 ">Kode </th>
                            <th scope="col" class="pt-6 pb-2 px-2">Pengeluaran</th>
                            <th scope="col" class="pt-6 pb-2 px-2">Deskripsi</th>
                            <th scope="col" class="pt-6 pb-2 px-2">Operator</th>
                            <th scope="col" class="pt-6 pb-2 px-2">Waktu</th>
                            <th scope="col" class="pt-6 pb-2 px-2">Total</th>
                            <th scope="col" class="pt-6 pb-2 px-2 text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pengeluaran as $data)
                            <tr>
                                <td class="p-2 w-24 text-lg font-bold uppercase">
                                    <p class="text-sudah">{{ $data->kd_pengeluaran }}</p>
                                </td>
                                <td class="p-2 text-left ">
                                    <p class="font-base text-base">{{ $data->pengeluaran }}</p>
                                </td>
                                <td class="p-2 text-left  ">
                                    <p class="">{{ $data->desk }}</p>
                                </td>
                                <td class="p-2 text-left  ">
                                    <p class="">{{ $data->operator }}</p>
                                </td>
                                <td class="p-2 text-left ">
                                    <p class="font-base text-base">{{ $data->waktu }}</p>
                                </td>
                                <td class="p-2 text-left ">
                                    <p class="font-base text-base">Rp. {{ $data->jumlah }}</p>
                                </td>
                                <form action="/deletePengeluaran/{{ $data->id_pengeluaran }}" method="post">
                                    <td class="py-2 text-center text-belum flex gap-2 ">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" onclick="return confirm('Yakin ingin hapus data?')">
                                            <i class="fa-solid fa-trash-can fa-xl"></i>
                                        </button>
                                        <a href="/EditPengeluaran/{{ $data->id_pengeluaran }}">
                                            <i class="fa-solid fa-edit fa-xl"></i>
                                        </a>
                                    </td>
                                </form>
                            </tr>
                            @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
