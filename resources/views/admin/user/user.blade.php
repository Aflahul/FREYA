@extends('layout.index')
@section('content')
    <div class="p-4 mt-20 sm:ml-72  ">
        <a type="button" id="tambahUserButton"
            class="flex items-center gap-3 bg-kuning hover:bg-yellow-500 font-medium rounded-xl text-sm px-3 py-2 w-fit"
            href="/createUser">
            <i class="fa-solid fa-circle-plus"></i>
            <p>Tambah User</p>
        </a>
        <!--user-->
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
            <div class="bg-white border-t-[6px] border-sudah rounded-[4px] overflow-x-auto px-1">
                <table class="w-full text-sm text-left ">
                    <thead>
                        <tr class="border-b-2 text-semibold ">
                            <th scope="col" class="px-2 py-5 ">Username</th>
                            <th scope="col" class="px-2 py-5 ">Password</th>
                            <th scope="col" class="px-2 py-5">Terakhir Login</th>
                            <th scope="col" class="px-2 py-5">Level</th>
                            <th scope="col" class="px-2 py-5 text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td class="px-2 py-2">
                                    <p class="font-semibold text-sudah">{{ $user->username }}</p>
                                </td>
                                <td class="px-2 py-2 text-left">
                                    <p class="font-light text-xs">{{ $user->confir_password }}</p>
                                </td>
                                <td class="px-2 py-2">
                                    @if ($user->last_login)
                                        <p class="font-light text-xs">{{ $user->last_login->setTimezone('Asia/Shanghai') }}
                                        </p>
                                    @endif
                                </td>
                                <td class="px-2 py-2">
                                    <p class="font-light text-xs">{{ $user->level }}</p>
                                </td>
                                <form action="/deleteUser/{{ $user->id_user }}" method="post">
                                    <td class="py-2 text-center text-belum flex gap-2 ">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" onclick="return confirm('Yakin ingin hapus data?')">
                                            <i class="fa-solid fa-trash-can fa-xl"></i>
                                        </button>
                                        <a href="/EditUser/{{ $user->id_user }}">
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
