<?php

namespace App\Http\Controllers\LandingPage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kegiatan;
use Illuminate\Support\Facades\DB;

class LandingPageController extends Controller
{
    public function beranda()
    {
    $kegiatan = Kegiatan::all();
    $data = [
        'title' => 'Pantai Batakan',
        'page' => 'beranda',
        'kegiatan' => $kegiatan
    ];

        return view('pages.landing.beranda', $data);
    }


    public function about()
    {
        $data = [
            'title' => 'About | Pantai Batakan',
            'page' => 'about'
        ];
        return view('pages.landing.about', $data);
    }

    public function paketW()
    {

        $data = [
            'title' => 'Paket Wisata | Pantai Batakan',
            'page' => 'paketW'
        ];
        return view('pages.landing.wisata', $data);
    }
    public function pemesanan()
    {

        $data = [
            'title' => 'Pemesanan | Pantai Batakan',
            'page' => 'pemesanan'
        ];
        return view('pages.landing.pemesanan', $data);
    }
    public function galery()
    {

        $data = [
            'title' => 'Galery | Pantai Batakan',
            'page' => 'galery'
        ];
        return view('pages.landing.galery', $data);
    }
}
