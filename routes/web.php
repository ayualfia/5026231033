<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Link ;
use App\Http\Controllers\PegawaiController ;
use App\Http\Controllers\Pegawai2Controller ;
use App\Http\Controllers\BlogController ;
use App\Http\Controllers\PenghapusController ;
use App\Http\Controllers\BelanjaController;
use App\Http\Controllers\Karyawan1Controller ;
use App\Http\Controllers\Karyawan2Controller ;
use App\Http\Controllers\LatihanA1Controller;
use App\Http\Controllers\BelajarEASController ;
use App\Http\Controllers\MyKaryawanController;

// import java.io;

// System.out.print();
// Disini pakai ::

Route::get('/', function () { // internal controller
    return view('welcome');
});

Route::get('halo', function () {
	return "<h2>Halo, Selamat datang di tutorial laravel www.malasngoding.com</h2>";
});

Route::get('blog', function () {
	return view('blog'); // tidak ada underline karena belum ada filenya
});

Route::get('hello', [Link::class, 'helloword']); // menggunakan controller

Route::get('pertama', function () {
	return view('pertama');
});

Route::get('bootstrap1', function () {
	return view('bootstrap1');
});

Route::get('js1', function () {
    return view('js1');
});

Route::get('js2', function () {
    return view('js2');
});

Route::get('LatihanLayoutPR', function () {
    return view('LatihanLayoutPR');
});

Route::get('LatihanLayout', function () {
    return view('LatihanLayout');
});

Route::get('template1', function () {
    return view('template1');
});

Route::get('tugaslinktree', function () {
    return view('tugaslinktree');
});

Route::get('Latihan ETS', function () {
    return view('indexlatihanets');
});

Route::get('contact', function () {
    return view('contact');
});

Route::get('ETS', function () {
    return view('indexets');
});

Route::get('projects', function () {
    return view('projects');
});

Route::get('resume', function () {
    return view('resume');
});

Route::get('frontend', function () {
    return view('frontend');
});

Route::get('linkfe', function () {
    return view('linkfe');
});


Route::get('dosen', [Link::class, 'index']);

//Route::get('/pegawai/{nama}', [Pegawai2Controller::class, 'index']);
Route::get('/formulir', [Pegawai2Controller::class, 'formulir']);
Route::post('/formulir/proses', [Pegawai2Controller::class, 'proses']);

// route blog
Route::get('/blog',  [BlogController::class, 'home']);
Route::get('/blog/tentang', [BlogController::class, 'tentang']);
Route::get('/blog/kontak', [BlogController::class, 'kontak']);

//crud pegawai
Route::get('/pegawai', [PegawaiController::class, 'index']);
Route::get('/pegawai/tambah', [PegawaiController::class,'tambah'] );
Route::post('/pegawai/store', [PegawaiController::class,'store'] );
Route::get('/pegawai/edit/{id}', [PegawaiController::class,'edit'] );
Route::post('/pegawai/update', [PegawaiController::class,'update'] );
Route::get('/pegawai/hapus/{id}', [PegawaiController::class,'hapus'] );
Route::get('/pegawai/cari', [PegawaiController::class,'cari'] );

//crud penghapus
Route::get('/penghapus', [PenghapusController::class, 'index']);
Route::get('/penghapus/tambah', [PenghapusController::class,'tambah'] );
Route::post('/penghapus/store', [PenghapusController::class,'store'] );
Route::get('/penghapus/edit/{id}', [PenghapusController::class,'edit'] );
Route::post('/penghapus/update', [PenghapusController::class,'update'] );
Route::get('/penghapus/hapus/{id}', [PenghapusController::class,'hapus'] );
Route::get('/penghapus/cari', [PenghapusController::class,'cari'] );

//crud keranjang belanja
Route::get('/keranjangbelanja', [BelanjaController::class, 'index']);
Route::get('/keranjangbelanja/tambah', [BelanjaController::class,'tambah'] );
Route::post('/keranjangbelanja/store', [BelanjaController::class,'store'] );
Route::get('/keranjangbelanja/hapus/{id}', [BelanjaController::class,'hapus'] );

//crud Karyawan1
Route::get('/karyawan', [Karyawan1Controller::class, 'index']);
Route::get('/karyawan/tambah', [Karyawan1Controller::class,'tambah'] );
Route::post('/karyawan/store', [Karyawan1Controller::class,'store'] );
Route::get('/karyawan/hapus/{id}', [Karyawan1Controller::class,'hapus'] );

//crud Karyawan2
Route::get('/karyawan2', [Karyawan2Controller::class, 'index']);
Route::get('/karyawan2/tambah', [Karyawan2Controller::class,'tambah'] );
Route::post('/karyawan2/store', [Karyawan2Controller::class,'store'] );
Route::get('/karyawan2/hapus/{id}', [Karyawan2Controller::class,'hapus'] );

//belajar EAS mandiri :)
Route::get('/LatihanA1', [LatihanA1Controller::class, 'index5']);  //dapet soal dari kelas C
Route::get('/mahasiswacb', [BelajarEASController::class, 'index']);
Route::get('/mahasiswacb/tambah', [BelajarEASController::class,'tambah'] );
Route::post('/mahasiswacb/store', [BelajarEASController::class,'store'] );
Route::get('/mahasiswacb/edit/{id}', [BelajarEASController::class,'edit'] );
Route::post('/mahasiswacb/update', [BelajarEASController::class,'update'] );
Route::get('/mahasiswacb/hapus/{id}', [BelajarEASController::class,'hapus'] );
Route::get('/mahasiswacb/cari', [BelajarEASController::class,'cari'] );

//crud EAS MyKaryawan
Route::get('/eas', [MyKaryawanController::class, 'index']);
Route::post('/eas/store', [MyKaryawanController::class,'store'] );
Route::get('/eas/edit/{id}', [MyKaryawanController::class,'edit'] );
Route::post('/eas/update', [MyKaryawanController::class,'update'] );
Route::get('/eas/view/{id}', [MyKaryawanController::class,'view'] );
