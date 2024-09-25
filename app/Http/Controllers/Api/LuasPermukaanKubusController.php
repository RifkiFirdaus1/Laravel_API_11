<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Resources\PostResource;

class LuasPermukaanKubusController extends Controller
{
    public function hitungLuasPermukaanKubus(Request $request)
    {
        $sisi = $request->sisi;
        $hitung = 6 * $sisi^2;
        return new PostResource(true, 'Berhasil hitung luas permukaan kubus', ['hasil'=>$hitung]);
    }
}