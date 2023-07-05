<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KasController extends Controller
{
    public function index()
    {
        return view('admin.transaksi.aruskas', [
            "title" => "Arus Kas"
        ]);
    }
}
