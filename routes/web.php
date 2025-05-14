<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Link ;
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
