<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MahasantriController;

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

// Route salam
Route::get('/salam', function () {
    return "Assalamu'alaikum Sobat, Selamat Belajar Laravel";
});

// Route Dengan parameter
Route::get('/pegawai/{nama}/{divisi}', function ($nama, $divisi) {
    return 'Nama Pegawai :  ' . $nama . '<br/>Departemen : ' . $divisi;
});

// Menambahkan Route baru di Routes/web.php
Route::get('/kabar', function () {
    return view(('kondisi'));
});

//Tambahkan route baru di routes/web.php (cara 1)
// Route::get(
//     'mahasiswa',
//     'App\Http\Controllers\MahasiswaController@dataMahasiswa'
// );
//Atau cara 2 (pilih salah satu saja)
Route::get(
    '/mahasiswa',
    [MahasiswaController::class, 'dataMahasiswa']
);

// Route Tugas3
Route::get(
    '/mahasantri',
    [MahasantriController::class, 'dataMahasantri']
);

// Pertemuan 4
// menambahkan view hello
Route::get('/hello', function () {
    return view('/p4/hello', ['name' => 'Ilman']);
});

//menambahkan view nilai
Route::get('/nilai', function () {
    return view('/p4/nilai');
});

//menambahkan view daftarnilai
Route::get('/daftarnilai', function () {
    return view('daftar_nilai');
});

Route::get('/phpframework', function () {
    return view('/p4/layouts.index');
});
