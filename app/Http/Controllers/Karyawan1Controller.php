<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class karyawan1Controller extends Controller
{
    //
    public function index()
    {
        // mengambil data dari table karyawan
        $karyawan = DB::table('karyawan')->paginate(10); // array per page

        // mengirim data karyawan ke view index
        return view('karyawan1/indexkaryawan1', ['karyawan' => $karyawan]);

    }

    // method untuk menampilkan view form tambah karyawan
    public function tambah()
    {

        // memanggil view tambah
        return view('karyawan1/tambahkaryawan1');

    }

    // method untuk insert data ke table karyawan
    public function store(Request $request)
    {
        // insert data ke table karyawan
        DB::table('karyawan')->insert([
            'kodepegawai' => $request->kodepegawai,
            'namalengkap' => $request->namalengkap,
            'divisi' => $request->divisi,
            'departemen' => $request->departemen
        ]);

        // alihkan halaman ke halaman karyawan
        return redirect('/karyawan');

    }

    // method untuk hapus data karyawan
    public function hapus($id)
    {
        // menghapus data karyawan berdasarkan id yang dipilih
        DB::table('karyawan')->where('kodepegawai', $id)->delete();

        // alihkan halaman ke halaman karyawan
        return redirect('/karyawan');
    }

}
