@extends('layout.index')

@section('content')
    <div class="p-4 mt-10 sm:ml-72 flex flex-col sm:flex-row place-content-between ">
        <div class="p-4 drop-shadow-lg basis-1/4 ">
            <div class=" bg-latar px-3 border-t-[6px]  border-sudah rounded-[4px]">
                <h2 class="font-medium pt-5  py-2">Tambah Pengeluaran</h2>
                <form action="/storePengeluaran" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label for="pengeluaran" class="block">Jenis Pengeluaran:</label>
                        <select id="pengeluaran" name="pengeluaran" class="border bg-inherit w-full rounded-md px-2 py-1">
                            <option value="Listrik">Listrik</option>
                            <option value="Gaji">Gaji</option>
                            <option value="Bahan">Bahan</option>
                            <option value="Lainnya">Lainnya</option>
                        </select>
                    </div>
                    <div class="mb-4">
                        <label for="desk" class="block">Deskripsi:</label>
                        <input type="text" id="desk" name="desk" class="border bg-inherit w-full rounded-md px-2 py-1">
                    </div>
                    <div class="mb-4">
                        <label for="jumlah" class="block">Jumlah:</label>
                        <input type="number" id="jumlah" name="jumlah" class="border bg-inherit w-full rounded-md px-2 py-1">
                    </div>

                    <div class="flex justify-start py-2">
                        <button type="submit" class="px-3 py-1 bg-green-500 text-white rounded-md mr-2">Tambahkan</button>
                        {{-- <a href="/pengeluaran" class="px-3 py-1 bg-red-500 text-white rounded-md">Batal</a> --}}
                    </div>
                </form>
            </div>
        </div>
        <!--pengeluaran-->
        <div class="p-4 drop-shadow-lg basis-3/4 overflow-x-auto">
            <div class="bg-latar border-t-[6px] border-sudah rounded-[4px]">
                <table class="p-2 w-full text-sm text-left overflow-x-auto ">
                    <thead>
                        <tr class="border-b-2">
                            <th scope="col" class="pt-6 pb-2 px-2 w-24 ">Kode </th>
                            <th scope="col" class="pt-6 pb-2 px-2">Pengeluaran</th>
                            <th scope="col" class="pt-6 pb-2 px-2">Deskripsi</th>
                            <th scope="col" class="pt-6 pb-2 px-2">Waktu</th>
                            <th scope="col" class="pt-6 pb-2 px-2">Total</th>
                            <th scope="col" class="pt-6 pb-2 px-2 text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pengeluaran as $data)
                            <tr class=" odd:bg-slate-200 even:bg-latar ">
                                <td class="px-1 w-24 text-lg font-bold ">
                                    <p class="text-sudah">{{ $data->kd_pengeluaran }}</p>
                                </td>
                                <td class="px-1 text-left ">
                                    <p class="font-base text-base">{{ $data->pengeluaran }}</p>
                                </td>
                                <td class="px-1 text-left text-xs font-light ">
                                    <p class="">{{ \Illuminate\Support\Str::limit($data->desk, 15) }}</p>
                                </td>
                                
                                <td class="px-1 text-left ">
                                    <p class="font-base text-base">{{ $data->created_at->format('d/m/Y') }}</p>
                                </td>
                                <td class="px-1 text-left ">
                                    <p class="font-base text-base">Rp. {{ number_format($data->jumlah,0, ',', '.') }}</p>
                                </td>
                                <form action="/deletePengeluaran/{{ $data->id_pengeluaran }}" method="post" class="">
                                    <td class=" text-center text-belum flex justify-center gap-2 ">
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
