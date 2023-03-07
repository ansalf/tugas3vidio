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

Route::get('/mahasiswa', function(){
    $nama = 'Anissa Alifia Putri';
    $nilai = 100;
    return view('mahasiswa', compact('nama','nilai'));
});

Route::get('/mahasiswa1', function(){
    $nama = 'Anissa Alifia Putri';
    $nilai = 100;
    return view('mahasiswa1', compact('nama','nilai'));
});

Route::get('/mahasiswa2', function () {
    return view('mahasiswa2');
});

Route::get('/mahasiswa3', function(){
    $nama = '<u>Anissa Alifia Putri</u>';
    $nilai = 100;
    return view('mahasiswa3', compact('nama','nilai'));
});

Route::get('/mahasiswa4', function(){
    $nama = '<u>Anissa Alifia Putri</u>';
    $nilai = 100;
    return view('mahasiswa4', compact('nama','nilai'));
});

Route::get('/mahasiswa5', function(){
    $nama = 'Anissa Alifia Putri';
    $nilai = 100;
    return view('mahasiswaifelse', compact('nama','nilai'));
});

Route::get('/mahasiswa6', function(){
    $nama = 'Anissa Alifia Putri';
    $nilai = 100;
    return view('mahasiswaifelse2', compact('nama','nilai'));
});

Route::get('/mahasiswa7', function(){
    $nama = 'Anissa Alifia Putri';
    $nilai = 100;
    return view('mahasiswaifelse3', compact('nama','nilai'));
});

Route::get('/mahasiswa8', function(){
    $nama = 'Anissa Alifia Putri';
    $nilai = 100;
    return view('mahasiswaifelse4', compact('nama','nilai'));
});

Route::get('/mahasiswa10', function(){
    return view('mahasiswafor');
});

Route::get('/mahasiswa11', function(){
    return view('mahasiswafor2');
});

Route::get('/mahasiswa12', function(){
    return view('mahasiswawhile');
});

Route::get('/mahasiswa13', function(){
    $nama = 'Anissa Alifia Putri';
    $nilai = [80, 64, 30, 76, 95];
    return view('mahasiswaforeach', compact ('nama', 'nilai'));
});

Route::get('/mahasiswa14', function(){
    $nama = 'Anissa Alifia Putri';
    $nilai = [80, 64, 30, 76, 95];
    return view('mahasiswaforeach2', compact ('nama', 'nilai'));
});

Route::get('/mahasiswa15', function(){
    $nama = 'Anissa Alifia Putri';
    $nilai = [80, 64, 30, 76, 95];
    return view('mahasiswaforelse', compact ('nama', 'nilai'));
});

Route::get('/mahasiswa16', function(){
    $nama = 'Anissa Alifia Putri';
    $nilai = [80, 64, 30, 76, 95];
    return view('mahasiswacontinue', compact('nama','nilai'));
});

Route::get('/mahasiswa17', function(){
    $nama = 'Anissa Alifia Putri';
    $nilai = [80, 64, 30, 76, 95];
    return view('mahasiswabreak', compact('nama','nilai'));
});

Route::get('/mahasiswa18', function(){
    $nama = 'Anissa Alifia Putri';
    $nilai = [80, 64, 30, 76, 95];
    return view('mahasiswakomen', compact('nama','nilai'));
});

Route::get('/mahasiswa19', function(){
    $nama = 'Anissa Alifia Putri';
    $nilai = [80, 64, 30, 76, 95];
    return view('mahasiswakomen', compact('nama','nilai'));
});