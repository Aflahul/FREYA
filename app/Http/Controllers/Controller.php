<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
}


// class LandingController extends Controller
// {
//     public function home()
//     {
//         return view('landing.home');
//     }

//     public function about()
//     {
//         return view('landing.about');
//     }

//     public function laundrycare()
//     {
//         return view('landing.laundrycare');
//     }

//     public function lokasi()
//     {
//         return view('landing.lokasi');
//     }

//     public function paket()
//     {
//         return view('landing.paket');
//     }

//     public function tracking()
//     {
//         return view('landing.tracking');
//     }
// }
