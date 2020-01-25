<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::apiResource('artikel','ArtikelAPIController');
Route::apiResource('kategoriArtikel','KategoriArtikelAPIController');

Route::apiResource('berita','BeritaAPIController');
Route::apiResource('kategoriBerita','KategoriBeritaAPIController');

Route::apiResource('galeri','GaleriAPIController');
Route::apiResource('kategoriGaleri','KategoriGaleriAPIController');

Route::apiResource('pengumuman','PengumumanAPIController');
Route::apiResource('kategoriPengumuman','KategoriPengumumanAPIController');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
