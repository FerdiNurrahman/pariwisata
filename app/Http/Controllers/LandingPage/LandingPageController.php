<?php

namespace App\Http\Controllers\LandingPage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LandingPageController extends Controller
{
    public function beranda()
    {
        // try {
        //     // Coba ambil data nomor hp admin
        //     $noHpAdmin = DB::table('akun')->where('role', 'admin')->select('no_hp')->first();

        //     // Jika data tidak ditemukan
        //     if (!$noHpAdmin) {
        //         // Mengembalikan response dengan status 303
        //         return response()->json([
        //             'error' => 'Tidak dapat terhubung ke database.'
        //         ], 303);
        //     }

        //     // Pastikan bahwa $noHpAdmin->no_hp ada dan merupakan string
        //     $no_hp = isset($noHpAdmin->no_hp) ? (string) $noHpAdmin->no_hp : '';
        // } catch (\Exception $e) {
        //     // Tangani kesalahan jika tidak bisa terhubung ke database
        //     // Mengembalikan response dengan status 303
        //     return response()->json([
        //         'error' => 'Tidak dapat terhubung ke database.'
        //     ], 303);
        // }

        $data = [
            'title' => 'Pantai Batakan',
            'page' => 'beranda',
            // 'no_hp' => $no_hp,
        ];

        return view('pages.landing.home', $data);
    }


    public function about()
    {
        $data = [
            'title' => 'About | Pantai Batakan',
            'page' => 'about'
        ];
        return view('pages.landing.tentang_kami', $data);
    }

    public function paketW()
    {

        $data = [
            'title' => 'Paket Wisata | Pantai Batakan',
            'page' => 'paketW'
        ];
        return view('pages.landing.layanan', $data);
    }
    public function pemesanan()
    {

        $data = [
            'title' => 'Pemesanan | Pantai Batakan',
            'page' => 'pemesanan'
        ];
        return view('pages.landing.layanan', $data);
    }
    public function galery()
    {

        $data = [
            'title' => 'Galery | Pantai Batakan',
            'page' => 'galery'
        ];
        return view('pages.landing.layanan', $data);
    }
}
