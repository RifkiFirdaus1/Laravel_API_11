<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Resources\PostResource;

class KelilingPersegiPanjangController extends Controller
{
    public function hitungKelilingPersegiPanjang(Request $request)
    {
        $panjang = $request->panjang;
        $lebar = $request->lebar;
        $hitung = 2 * ($panjang + $lebar);
        return new PostResource(true, 'Berhasil hitung keliling persegi panjang', ['hasil'=>$hitung]);
    }
}