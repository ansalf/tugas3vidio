<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('mahasiswa', function () {
    $arrMahasiswa = ["Risa Lestari", "Rudi Hermawan". "Bambang kusumo", "Lisa Permata"];
    return view('mahasiswa')->with('mahasiswa', $arrMahasiswa);
});

Route::get('dosen', function () {
    $arrDosen = ["Maya, M.M", "Prof. silvia, M.farm". "Dr. Umar", "Dr. Syahrial"];
    return view('dosen')->with('dosen', $arrDosen);
});

Route::get('gallery', function () {
    return view('gallery');
});