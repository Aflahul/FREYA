{{-- @extends('layout.index')
@section('content')
    <div class="fixed inset-0 flex justify-center bg-gray-900 bg-opacity-50">
        <div class="p-24 sm:ml-72">
            <div class="max-w-screen-sm mx-auto p-4 bg-white rounded-md border-blue-600">
                <h2 class="text-lg font-medium mb-4">Edit User</h2>
                <form action="{{ route('UpdateUser.update', $user->id_user) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-4">
                        <label for="username" class="block">Username:</label>
                        <input type="text" id="username" name="username" value="{{ old('username', $user->username) }}"
                            class="border rounded-md px-2 py-1">
                    </div>
                    <div class="mb-4">
                        <label for="password" class="block">Password:</label>
                        <input type="password" id="password" name="password" value="{{ old('password', $user->confir_password) }}"
                            class="border rounded-md px-2 py-1">
                    </div>
                    <div class="mb-4">
                        <label for="level" class="block">Level:</label>
                        <select id="level" name="level" class="border rounded-md px-2 py-1">
                            <option value="admin">Admin</option>
                            <option value="pegawai">Pegawai</option>
                        </select>
                    </div>
                    <div class="flex justify-end">
                        <button type="submit" class="px-3 py-1 bg-green-500 text-white rounded-md mr-2">Simpannn</button>
                        <a href="/user" class="px-3 py-1 bg-red-500 text-white rounded-md">Batal</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection --}}
@extends('layout.index')
@section('content')
    <div class="p-4 mt-20 sm:ml-72 flex flex-col sm:flex-row place-content-between ">
        <div class="p-4 drop-shadow-lg w-fit ">
            <div class=" bg-white px-3 border-t-[6px] border-sudah rounded-[4px]">
                <h2 class="font-medium pt-3 py-2">Tambah User</h2>
                <form action="{{ route('UpdateUser.update', $user->id_user) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-4 border-t-2 pt-2">
                        <label for="username" class="block">Username:</label>
                        <input type="text" id="username" name="username" class="border rounded-md px-2 py-1" value="{{ old('username', $user->username) }}">
                    </div>
                    <div class="mb-4">
                        <label for="password" class="block">Password:</label>
                        <input type="password" id="password" name="password" value="{{ old('password', $user->confir_password) }}" class="border rounded-md px-2 py-1">
                    </div>
                    <div class="mb-4">
                        <label for="level" class="block">Level:</label>
                        <select id="level" name="level" class="border rounded-md px-2 py-1">
                            <option value="admin">Admin</option>
                            <option value="pegawai">Pegawai</option>
                        </select>
                    </div> 
                     <div class="flex justify-end">
                        <button type="submit" class="px-3 py-1 bg-green-500 text-white rounded-md mr-2">Simpannn</button>
                        <a href="/user" class="px-3 py-1 bg-red-500 text-white rounded-md">Batal</a>
                    </div>
                </form>
            </div>
        </div>
        <!--user-->
        <div class="p-4 drop-shadow-lg w-screen overflow-x-auto">
            <div class="bg-white border-t-[6px] border-sudah rounded-[4px] overflow-x-auto px-1">
                <table class="w-full text-sm text-left ">
                    <thead>
                        <tr class="border-b-2 text-semibold">
                            <th scope="col" class="pt-4 py-2 ">Username</th>
                            <th scope="col" class="pt-4 py-2 ">Password</th>
                            <th scope="col" class="pt-4 py-2">Terakhir Login</th>
                            <th scope="col" class="pt-4 py-2">Level</th>
                            <th scope="col" class="pt-4 py-2 text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user1)
                            <tr>
                                <td class="px-2 py-2">
                                    <p class="font-semibold text-sudah">{{ $user1->username }}</p>
                                </td>
                                <td class="px-2 py-2 text-left">
                                    <p class="font-light text-xs">{{ $user1->confir_password }}</p>
                                </td>
                                <td class="px-2 py-2">
                                    @if ($user->last_login)
                                        <p class="font-light text-xs">{{ $user1->last_login->setTimezone('Asia/Shanghai') }}
                                        </p>
                                    @endif
                                </td>
                                <td class="px-2 py-2">
                                    <p class="font-light text-xs">{{ $user1->level }}</p>
                                </td>
                                <form action="/deleteUser/{{ $user1->id_user }}" method="post">
                                    <td class="py-2 text-center text-belum flex gap-2 ">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" onclick="return confirm('Yakin ingin hapus data?')">
                                            <i class="fa-solid fa-trash-can fa-xl"></i>
                                        </button>
                                        <a href="/EditUser/{{ $user1->id_user }}">
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

