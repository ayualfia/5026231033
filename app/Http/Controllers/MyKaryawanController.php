<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class MyKaryawanController extends Controller
{
    //
    public function index()
    {
        // mengambil data dari table karyawan
        $mykaryawan = DB::table('mykaryawan')->get();

        // mengirim data karyawan ke view index
        return view('mykaryawan/index', ['mykaryawan' => $mykaryawan]);

    }

    // method untuk insert data ke table karyawan
    public function store(Request $request)
    {
        // insert data ke table karyawan
        DB::table('mykaryawan')->insert([
            'kodepegawai' => $request->kodepegawai,
            'namalengkap' => $request->namalengkap,
            'divisi' => $request->divisi,
            'departemen' => $request->departemen
        ]);

        // alihkan halaman ke halaman karyawan
        return redirect('/eas');

    }

    // method untuk edit data mykaryawan
    public function edit($id)
    {
        // mengambil data mykaryawan berdasarkan id yang dipilih
        $mykaryawan = DB::table('mykaryawan')->where('kodepegawai', $id)->get();
        // passing data mykaryawan yang didapat ke view edit.blade.php
        return view('mykaryawan/edit', ['mykaryawan' => $mykaryawan]);

    }

    // update data mykaryawan
    public function update(Request $request)
    {
        // update data mykaryawan
        DB::table('mykaryawan')->where('kodepegawai', $request->id)->update([
            'kodepegawai' => $request->kodepegawai,
            'namalengkap' => $request->namalengkap,
            'divisi' => $request->divisi,
            'departemen' => $request->departemen
        ]);
        // alihkan halaman ke halaman mykaryawan
        return redirect('/eas');
    }

    // method untuk view data mykaryawan
    public function view($id)
    {
        // mengambil data mykaryawan berdasarkan id yang dipilih
        $mykaryawan = DB::table('mykaryawan')->where('kodepegawai', $id)->get();
        // passing data mykaryawan yang didapat ke view .blade.php
        return view('mykaryawan/view', ['mykaryawan' => $mykaryawan]);

    }


}
