@extends('layout.index')

@section('content')
    <div class="p-4 mt-20 sm:ml-72 flex flex-col sm:flex-row place-content-between ">
        <div class="p-4 drop-shadow-lg w-fit ">
            <div class=" bg-white px-3 border-t-[6px] border-sudah rounded-[4px]">
                <h2 class="font-medium pt-5 py-2">Tambah Pengeluaran</h2>
                <form action="/storePengeluaran" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label for="pengeluaran" class="block">Jenis Pengeluaran:</label>
                        <select id="pengeluaran" name="pengeluaran" class="border w-full rounded-md px-2 py-1">
                            <option value="Listrik">Listrik</option>
                            <option value="Gaji">Gaji</option>
                            <option value="Bahan">Bahan</option>
                            <option value="Lainnya">Lainnya</option>
                        </select>
                    </div>
                    <div class="mb-4">
                        <label for="desk" class="block">Deskripsi:</label>
                        <input type="text" id="desk" name="desk" class="border w-full rounded-md px-2 py-1">
                    </div>
                    <div class="mb-4">
                        <label for="waktu" class="block ">Waktu:</label>
                        <input type="datetime-local" id="waktu" name="waktu"
                            class="border w-full rounded-md px-2 py-1">
                    </div>
                    <div class="mb-4">
                        <label for="jumlah" class="block">Jumlah:</label>
                        <input type="number" id="jumlah" name="jumlah" class="border w-full rounded-md px-2 py-1">
                    </div>

                    <div class="flex justify-start py-2">
                        <button type="submit" class="px-3 py-1 bg-green-500 text-white rounded-md mr-2">Simpan</button>
                        {{-- <a href="/pengeluaran" class="px-3 py-1 bg-red-500 text-white rounded-md">Batal</a> --}}
                    </div>
                </form>
            </div>
        </div>
        <!--pengeluaran-->
        <div class="p-4 drop-shadow-lg w-screen overflow-x-auto">
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
                                <td class="p-2 w-24 text-lg font-bold ">
                                    <p class="text-sudah">{{ $data->kd_pengeluaran }}</p>
                                </td>
                                <td class="p-2 text-left ">
                                    <p class="font-base text-base">{{ $data->pengeluaran }}</p>
                                </td>
                                <td class="p-2 text-left text-xs font-light ">
                                    <p class="">{{ \Illuminate\Support\Str::limit($data->desk, 15) }}</p>
                                </td>
                                <td class="p-2 text-left  ">
                                    @if ($operator !== '')
                                        <p>{{ $operator }}</p>
                                    @else
                                        <p>Operator tidak tersedia</p>
                                    @endif
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
