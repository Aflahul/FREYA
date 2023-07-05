
@extends('layout.index')
@section('content')
    <div class="fixed inset-0 flex justify-center bg-gray-900 bg-opacity-50">
        <div class="p-24 sm:ml-72">
            <div class="max-w-screen-sm mx-auto p-4 bg-white rounded-md border-blue-600">
                <h2 class="text-lg font-medium mb-4">Tambah User</h2>
                <form action="/StoreUser" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label for="username" class="block">Username:</label>
                        <input type="text" id="username" name="username" class="border rounded-md px-2 py-1">
                    </div>
                    <div class="mb-4">
                        <label for="password" class="block">Password:</label>
                        <input type="password" id="password" name="password" class="border rounded-md px-2 py-1">
                    </div>
                    <div class="mb-4">
                        <label for="level" class="block">Level:</label>
                        <select id="level" name="level" class="border rounded-md px-2 py-1">
                            <option value="admin">Admin</option>
                            <option value="pegawai">Pegawai</option>
                        </select>
                    </div> 
                    <div class="flex justify-end">
                        <button type="submit" class="px-3 py-1 bg-green-500 text-white rounded-md mr-2">Simpan</button>
                        <a href="/user" class="px-3 py-1 bg-red-500 text-white rounded-md">Batal</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
