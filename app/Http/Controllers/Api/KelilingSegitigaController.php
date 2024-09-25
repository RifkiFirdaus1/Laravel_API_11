<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Resources\PostResource;

class KelilingSegitigaController extends Controller
{
    public function hitungKelilingSegitiga(Request $request)
    {
        $sisi = $request->sisi;
        $hitung = 3 * $sisi;
        return new PostResource(true, 'Berhasil hitung keliling segitiga', ['hasil'=>$hitung]);
    }
}