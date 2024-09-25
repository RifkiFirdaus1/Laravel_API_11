<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Resources\PostResource;

class KelilingLingkaranController extends Controller
{
    public function hitungKelilingLingkaran(Request $request)
    {
        $phi = $request->phi;
        $jarijari = $request->jarijari;
        $hitung = 2 * $phi * $jarijari;
        return new PostResource(true, 'Berhasil hitung keliling lingkaran', ['hasil'=>$hitung]);
    }
}