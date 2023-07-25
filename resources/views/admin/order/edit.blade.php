@extends('layout.index')

@section('content')
    <div class="p-4 mt-20 sm:ml-72 flex flex-col place-content-between ">
        <div class="p-4 drop-shadow flex relative flex-col place-content-between ">
            <div class="bg-white px-3 border-t-[6px] border-sudah rounded-[4px]">
                <h2 class="font-medium pt-4 py-2"> Edit Data </h2>
                <form action="{{ route('UpdateOrder.update', $data->id_order) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="flex flex-col sm:flex-row place-content-between gap-5 items-center ">
                        <div class="mb-4">
                            <label for="kd_order" class="block pt-2">Kode Order:</label>
                            <input type="text" id="kd_order" name="kd_order" class="border rounded-md px-2 py-1"
                                value="{{ $data->kd_order }}" disabled>
                        </div>
                        {{-- //dropdown nama pelanggan// --}}
                        <div class="mb-4">
                            <label for="id_pelanggan" class="block pt-2">Pilih
                                Nama Pelanggan</label>

                            <select name="id_pelanggan" id="id_pelanggan">
                                @foreach ($datapel as $plg)
                                    <option value="{{ $plg->id_pelanggan }}"
                                        {{ $data->id_pelanggan == $plg->id_pelanggan ? 'selected' : '' }}>
                                        {{ $plg->namapel }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        {{-- dropdown sebelumnya/blm modif --}}
                        {{-- <div class="mb-4">
                            <label for="id_pelanggan" class="block pt-2">Pilih
                                Nama Pelanggan</label>
                            <select id="id_pelanggan" name="id_pelanggan" class="border rounded-md px-2 py-1 focus:ring-blue-500 focus:border-blue-500 block w-full p-2 form-control @error('id_pelanggan') is-invalid @enderror">
                                <option value="">Pilih Nama Pelanggan..</option>
                                    @foreach ($datapel as $datas)
                                        <option value="{{ $datas->id_pelanggan }}">{{ $datas->namapel }}</option>
                                    @endforeach
                            </select>
                        </div> --}}
                        {{-- //dropdown jenis laundry// --}}
                        <div class="mb-4">
                            <label for="id_layanan" class="block pt-2">Pilih
                                Jenis Layanan</label>

                            {{-- <select name="id_layanan" id="id_layanan"
                                class="border rounded-md px-2 py-1 focus:ring-blue-500 focus:border-blue-500 block w-full p-2 form-control @error('nama_layanan') is-invalid @enderror">
                                <option value="">Pilih Jenis Layanan..</option>
                                @foreach ($data_layanan as $datas)
                                    <option value="{{ $datas->id_layanan }}">{{ $datas->nama_layanan }}</option>
                                @endforeach
                            </select> --}}

                            <select name="id_layanan" id="id_layanan">
                                @foreach ($data_layanan as $layanan)
                                    <option value="{{ $layanan->id_layanan }}"
                                        {{ $data->id_layanan == $layanan->id_layanan ? 'selected' : '' }}>
                                        {{ $layanan->nama_layanan }}
                                    </option>
                                @endforeach
                            </select>
                        </div>


                        <div class="mb-4">
                            <label for="qty" class="block pt-2">Qty:</label>
                            <input class="border rounded-md px-2 py-1" type="number" name="qty" id="qty"
                                onchange="calculateTotal()" min="1" value="{{ old('qty', $data->qty) }}">
                        </div>

                        <div class="py-2 place-content-end flex gap-4">
                            <button type="submit" class="px-3 py-1 bg-green-500 text-white rounded-md">Simpan</button>
                            <a href="/order" class="px-4 py-1 bg-red-500 text-white rounded-md">Batal</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!--pelanggan-->
        <div class="p-4 drop-shadow-lg relative overflow-x-auto">
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
                        @foreach ($orders as $item)
                            <form action="">
                                <tr>
                                    <td class="px-2 w-24  font-bold uppercase">
                                        <p class="text-sudah">{{ $item->kd_order }}</p>
                                    </td>
                                    <td class="px-2 text-left ">
                                        <p class="font-base text-base">{{ $item->pelanggan->namapel }}</p>
                                    </td>
                                    <td class="px-2 text-left  bg-selesai">
                                        <p class="">{{ $item->produk->nama_layanan }}</p>
                                    </td>
                                    <td class="px-2  text-left ">
                                        <p class="font-base text-base">{{ $item->created_at }}</p>
                                        {{-- <p class="font-base text-base">Selesai : -</p>
                                <p class="font-base text-base">Diambil : -</p> --}}
                                    </td>
                                    <td class="px-2 text-left  bg-selesai">
                                        <p class=""> <span>{{ $item->durasi }}</span> Hari </p>
                                    </td>
                                    <td class="px-2 text-left  ">
                                        <p class="font-base text-base"> <span>{{ $item->qty }}</span>
                                            <span>{{ $item->satuan }}</span>
                                        </p>
                                    </td>
                                    <td class="px-2 text-left  ">
                                        <p class="font-base text-base">Rp. <span>{{ $item->total }}</span></p>
                                    </td>
                                    <td class="px-2 font-base text-white text-xs text-center flex gap-2 ">
                                        @if ($item->status == 'Sedang Cuci')
                                            <button class="">
                                                <p class="px-3 py-0.5 w-fit  bg-w3 rounded-xl">
                                                    {{ $item->status }}
                                                </p>
                                            </button>
                                        @else
                                            <p class="px-3 py-0.5 w-fit bg-sudah rounded-xl">{{ $item->status }}</p>
                                        @endif

                                        @if ($item->status_pembayaran == 'Belum Dibayar')
                                            <button class="">
                                                <p class="px-3 py-0.5 w-fit  bg-w3 rounded-xl">
                                                    {{ $item->status_pembayaran }}
                                                </p>
                                            </button>
                                        @else
                                            <p class="px-3 py-0.5 w-fit bg-sudah rounded-xl">{{ $item->status_pembayaran }}
                                            </p>
                                        @endif
                                    </td>
                                    <td class="text-center text-belum">
                                        <div class="h-auto  ">
                                            <a href="/EditOrder/{{ $item->id_order }}">
                                                <i class="fa-solid fa-edit fa-xl "></i>
                                            </a>
                            </form>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endsection
