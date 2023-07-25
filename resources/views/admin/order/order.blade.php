@extends('layout.index')

@section('content')
    <div class="p-4 mt-20 sm:ml-72 flex flex-col place-content-between ">
        <div class="p-4 drop-shadow flex relative flex-col place-content-between ">
            <div class="bg-white px-3 border-t-[6px] border-sudah rounded-[4px]">
                <h2 class="font-medium pt-4 py-2"> Tambah Order </h2>
                <form action="/storeOrder" method="POST" class="flex flex-col border-t-2">
                    @csrf
                    <div class="flex flex-col sm:flex-row place-content-between gap-5 items-center ">
                        <div class="mb-4">
                            <label for="id_pelanggan" class="block pt-2">Pilih Nama Pelanggan</label>
                            <select id="id_pelanggan" name="id_pelanggan"
                                class="border rounded-md px-2 py-1 focus:ring-blue-500 focus:border-blue-500 block w-full p-2 form-control @error('id_pelanggan') is-invalid @enderror">
                                <option value="">Pilih Nama Pelanggan..</option>
                                <!-- Daftar nama pelanggan akan ditampilkan di sini -->
                            </select>
                        </div>

                        {{-- <div class="mb-4">
                            <label for="id_pelanggan" class="block pt-2">Pilih
                                Nama Pelanggan</label>
                            <select id="id_pelanggan" name="id_pelanggan" "
                                                    class="border rounded-md px-2 py-1 focus:ring-blue-500 focus:border-blue-500 block w-full p-2 form-control @error('id_pelanggan') is-invalid @enderror">
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
                            <select name="id_layanan" id="id_layanan"
                                class="border rounded-md px-2 py-1 focus:ring-blue-500 focus:border-blue-500 block w-full p-2 form-control @error('nama_layanan') is-invalid @enderror">
                                <option value="">Pilih Jenis Layanan..</option>
                                @foreach ($data_layanan as $datas)
                                    <option value="{{ $datas->id_layanan }}">{{ $datas->nama_layanan }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-4">
                            <label for="qty" class="block pt-2">Qty:</label>
                            <input class="border rounded-md px-2 py-1" type="number" name="qty" id="qty"
                                onchange="calculateTotal()" min="0.01" step="0.01" value="1">
                        </div>

                        <div class="py-2 place-content-end flex flex-col">
                            <div class="flex items-center mr-4">
                                <input checked id="teal-checkbox" type="checkbox" name="status_pembayaran" value=""
                                    class="w-4 h-4 text-teal-600 bg-gray-100 border-gray-300 rounded focus:ring-teal-500 dark:focus:ring-teal-600 dark:ring-offset-gray-800 focus:ring-2">
                                <label for="teal-checkbox" class="ml-2 text-sm font-medium text-gray-900 py-2">Bayar
                                    Sekarang</label>
                            </div>
                            <button type="submit"
                                class="px-3 h-fit py-1 bg-green-500 text-white rounded-md mr-2">Simpan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="p-4 drop-shadow-lg relative overflow-x-auto">
            <div class="bg-white border-t-[6px] border-sudah rounded-[4px]">
                <table class="w-full text-sm text-left">
                    <thead>
                        <tr class="border-b-2">
                            <th scope="col" class="pt-6 pb-2 px-2 w-24">Kode Order</th>
                            <th scope="col" class="pt-6 pb-2 px-2">Pelanggan</th>
                            <th scope="col" class="pt-6 pb-2 px-2">Jenis Laundry</th>
                            <th scope="col" class="pt-6 pb-2 px-2">Waktu Masuk</th>
                            <th scope="col" class="pt-6 pb-2 px-2">Durasi</th>
                            <th scope="col" class="pt-6 pb-2 px-2">Qty</th>
                            <th scope="col" class="pt-6 pb-2 px-2">Total Harga</th>
                            <th scope="col" class="pt-6 pb-2 px-2">Status</th>
                            <th scope="col" class="pt-6 pb-2 px-2 text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                            <tr>
                                <td class="px-2 w-24 font-bold uppercase">
                                    <p class="text-sudah">{{ $item->kd_order }}</p>
                                </td>
                                <td class="px-2 text-left ">
                                    <p class="font-base text-base">{{ $item->pelanggan->namapel }}</p>
                                </td>
                                <td class="px-2 text-left bg-selesai">
                                    <p class="">{{ $item->produk->nama_layanan }}</p>
                                </td>
                                <td class="px-2 text-left ">
                                    <p class="font-base text-base">{{ $item->created_at }}</p>
                                </td>
                                <td class="px-2 text-left bg-selesai">
                                    <p class=""><span>{{ $item->durasi }}</span> Hari</p>
                                </td>
                                <td class="px-2 text-left ">
                                    <p class="font-base text-base">
                                        <span>{{ $item->qty }}</span>
                                        <span>{{ $item->satuan }}</span>
                                    </p>
                                </td>
                                <td class="px-2 text-left ">
                                    <p class="font-base text-base">Rp. <span>{{ $item->total }}</span></p>
                                </td>
                                <td class="px-2 font-base text-white text-xs text-center flex gap-2 w-fit">
                                    @if ($item->status == 'Sedang Cuci')
                                        <form action="/selesai/{{ $item->id_order }}" method="POST">
                                            @csrf
                                            <button type="submit" class="px-3 py-0.5 w-fit bg-w3 rounded-xl"
                                                onclick="return confirm('Yakin ingin ubah Status?')">
                                                {{ $item->status }}
                                            </button>
                                        </form>
                                    @else
                                        <p class="px-3 py-0.5 w-fit bg-sudah rounded-xl">{{ $item->status }}</p>
                                    @endif
                                    @if ($item->status_pembayaran == 'Belum Dibayar')
                                        <form action="/sudahdibayar/{{ $item->id_order }}" method="POST">
                                            @csrf
                                            <button type="submit" class="px-3 py-0.5 w-fit bg-w3 rounded-xl"
                                                onclick="return confirm('Yakin ingin ubah Status?')">
                                                {{ $item->status_pembayaran }}
                                            </button>
                                        </form>
                                    @else
                                        <p class="px-3 py-0.5 w-fit bg-sudah rounded-xl">{{ $item->status_pembayaran }}
                                        </p>
                                    @endif
                                </td>
                                <form action="/deleteOrder/{{ $item->id_order }}" method="post">
                                    <td class="py-2 text-left  text-belum w-fit">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" onclick="return confirm('Yakin ingin hapus data?')">
                                            <i class="fa-solid fa-trash-can fa-xl"></i>
                                        </button>
                                        <a href="/EditOrder/{{ $item->id_order }}">
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

    <script>
        // Ambil elemen dropdown untuk nama pelanggan
        const dropdownPelanggan = document.getElementById('id_pelanggan');
        const dataPelanggan = @json($datapel);

        // Fungsi untuk menampilkan daftar nama pelanggan dalam dropdown
        function tampilkanDaftarPelanggan(data) {
            dropdownPelanggan.innerHTML = '<option value="">Pilih Nama Pelanggan..</option>';
            data.forEach(pelanggan => {
                dropdownPelanggan.innerHTML +=
                    `<option value="${pelanggan.id_pelanggan}">${pelanggan.namapel}</option>`;
            });
        }

        // Fungsi untuk mengurutkan daftar nama pelanggan berdasarkan tanggal pembuatan terbaru
        function urutkanPelangganTerbaru() {
            const dataTerbaru = dataPelanggan.sort((a, b) => new Date(b.created_at) - new Date(a.created_at));
            const dataSepuluhTerbaru = dataTerbaru.slice(0, 10);
            tampilkanDaftarPelanggan(dataSepuluhTerbaru);
        }

        // Panggil fungsi untuk mengisi dropdown dengan daftar nama pelanggan saat halaman dimuat
        urutkanPelangganTerbaru();
    </script>
@endsection
