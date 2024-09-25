<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Resources\PostResource;

class VolumeKubusController extends Controller
{
    public function hitungVolumeKubus(Request $request)
    {
        $sisi = $request->sisi;
        $hitung = $sisi * $sisi * $sisi;
        return new PostResource(true, 'Berhasil hitung volume kubus', ['hasil'=>$hitung]);
    }
}