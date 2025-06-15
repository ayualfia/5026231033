<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Karyawan2Controller extends Controller
{
    //
    public function index()
    {
        // mengambil data dari table karyawan
        $karyawan = DB::table('karyawan')->paginate(10); // array per page

        // mengirim data karyawan ke view index
        return view('karyawan2/indexkaryawan2', ['karyawan' => $karyawan]);

    }

    // method untuk menampilkan view form tambah karyawan
    public function tambah()
    {

        // memanggil view tambah
        return view('karyawan2/tambahkaryawan2');

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

        // alihkan halaman ke halaman penghapus
        return redirect('/karyawan2');

    }

    // method untuk hapus data karyawan
    public function hapus($id)
    {
        // menghapus data karyawan berdasarkan id yang dipilih
        DB::table('karyawan')->where('kodepegawai', $id)->delete();

        // alihkan halaman ke halaman karyawan
        return redirect('/karyawan2');
    }
}
