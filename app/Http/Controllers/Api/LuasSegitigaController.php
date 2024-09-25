<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Resources\PostResource;

class LuasSegitigaController extends Controller
{
    public function hitungLuasSegitiga(Request $request)
    {
        $alas = $request->alas;
        $tinggi = $request->tinggi;
        $hitung = 1.5 * $alas * $tinggi;
        return new PostResource(true, 'Berhasil hitung luas segitiga', ['hasil'=>$hitung]);
    }
}