<?php

namespace App\Http\Controllers;

use App\Models\Porto;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        return view('pages.landing.index');
    }

    public function data()
    {
        
        return view('pages.landing.data',[
            'nama' => 'Muhammad Naufal Fahrezi',
            'kelas' => 'XI RPL 3',
            'sekolah' => 'SMKN 2 KOTA MOJOKERTO',
        ]);
    }

    public function project()
    {
        $data = Porto::get();
        return view('pages.landing.project', [
            'data_porto' => $data,
        ]);
    }

}
