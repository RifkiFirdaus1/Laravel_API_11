<?php

use Illuminate\Auth\Middleware\Authenticate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware(Authenticate::using('sanctum'));

//posts
Route::apiResource('/posts', App\Http\Controllers\Api\PostController::class);
Route::post('/lingkaran', [App\Http\Controllers\Api\LingkaranController::class, 'hitungLuasLingkaran']);
Route::post('/kelilinglingkaran', [App\Http\Controllers\Api\KelilingLingkaranController::class, 'hitungKelilingLingkaran']);
Route::post('/luaspersegi', [App\Http\Controllers\Api\LuasPersegiController::class, 'hitungLuasPersegiPanjang']);
Route::post('/kelilingpersegi', [App\Http\Controllers\Api\KelilingPersegiPanjangController::class, 'hitungKelilingPersegiPanjang']);
Route::post('/luassegitiga', [App\Http\Controllers\Api\LuasSegitigaController::class, 'hitungLuasSegitiga']);
Route::post('/kelilingsegitiga', [App\Http\Controllers\Api\KelilingSegitigaController::class, 'hitungKelilingSegitiga']);
Route::post('/volumekubus', [App\Http\Controllers\Api\VolumeKubusController::class, 'hitungVolumeKubus']);
Route::post('/luaspermukaankubus', [App\Http\Controllers\Api\LuasPermukaanKubusController::class, 'hitungLuasPermukaanKubus']);