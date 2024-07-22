<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Kegiatan;
use Illuminate\Http\Request;

class adminController extends Controller
{
    public function index()
    {
    
        $kegiatan = Kegiatan::all();
        $data = 
        [
            'title' => 'Dashboard Admin',
            'page' => 'Dashboard',
            'kegiatan' => $kegiatan
        ];

        return view('pages.admin.admin', $data);
    }
}
