<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index()
    {
        $users = User::all();
        // dd($users);
        return view('admin.user.user', [
            'title' => 'Setting-User',
            'users' => $users
        ]);
    }

    public function create()
    {
        return view('admin.user.tambah', [
            'title' => 'Setting-User',
        ]);
    }

    public function store(Request $request)
    {
        // Validasi input form 
        $request->validate([
            'username' => 'required',
            'password' => 'required',
            // 'confir_password' => 'required',
            'level' => 'required'

        ]);
        $datas = [
            'username' => $request->username,
            'password' => $request->password,
            'confir_password' => $request->password,
            'level' => $request->level,
        ];

        $datas['password'] = bcrypt($datas['password']);

        // dd($datas);
        // Simpan data pengguna ke dalam database
        User::create($datas);
        return redirect('/user');
    }

    public function tambahuser()
    {
        return view('admin.user.tambahuser');
    }

    public function edit($id_user)
    {
        $user = User::where('id_user', $id_user)->first();
        return view('admin.user.edit', [
            'title' => 'Setting-User',
            'user' => $user
        ]);
    }

    public function update(Request $request, $id_user)
    {
        $user = User::find($id_user);
        $user->username = $request->input('username');
        $user->password = $request->input('password');
        $user->confir_password = $request->input('password');
        $user['password'] = bcrypt($user['password']);

        $user->save();

        return redirect('/user');
    }

    public function destroy($id_user)
    {
        $user = User::find($id_user);
        //dd($user);
        $user->delete();
        return redirect('/user');
    }
}
