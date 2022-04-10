<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CobaController extends Controller
{
    public function index ()
    {
        return 'test berhasil';
    }

    public function urutan ($ke)
    {
        
        $numbers =[
            ['ke' => $ke, 'nomor' => 20],
            ['ke' => $ke, 'nomor' => 25],
            ['ke' => $ke, 'nomor' => 30],
            ['ke' => $ke, 'nomor' => 35],
        ];



        return view('urutan', compact('numbers'));
    }

    public function coba ($ke)
    {
        return view('coba', ['ke' => $ke]);
    }
}