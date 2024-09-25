<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Resources\PostResource;

class LingkaranController extends Controller
{
    public function hitungLuasLingkaran(Request $request)
    {
        $phi = $request->phi;
        $jarijari = $request->jarijari;
        $hitung = $phi *$jarijari * $jarijari;
        return new PostResource(true, 'Berhasil hitung luas lingkaran', ['hasil'=>$hitung]);
    }
}