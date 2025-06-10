<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PenghapusController extends Controller
{
    //
    public function index()
    {
        // mengambil data dari table penghapus
        $penghapus = DB::table('penghapus')->paginate(10); // array per page

        // mengirim data penghapus ke view index
        return view('penghapus/indexpenghapus', ['penghapus' => $penghapus]);

    }

    // method untuk menampilkan view form tambah penghapus
    public function tambah()
    {

        // memanggil view tambah
        return view('penghapus/tambahpenghapus');

    }

    // method untuk insert data ke table penghapus
    public function store(Request $request)
    {
        // insert data ke table penghapus
        DB::table('penghapus')->insert([
            'merkpenghapus' => $request->merek,
            'hargapenghapus' => $request->harga,
            'tersedia' => $request->tersedia,
            'berat' => $request->berat
        ]);
        // alihkan halaman ke halaman penghapus
        return redirect('/penghapus');

    }

    // method untuk edit data penghapus
    public function edit($id)
    {
        // mengambil data penghapus berdasarkan id yang dipilih
        $penghapus = DB::table('penghapus')->where('ID', $id)->get();
        // passing data penghapus yang didapat ke view edit.blade.php
        return view('penghapus/editpenghapus', ['penghapus' => $penghapus]);

    }

    // update data penghapus
    public function update(Request $request)
    {
        // update data penghapus
        DB::table('penghapus')->where('ID', $request->id)->update([
            'merkpenghapus' => $request->merek,
            'hargapenghapus' => $request->harga,
            'tersedia' => $request->tersedia,
            'berat' => $request->berat
        ]);
        // alihkan halaman ke halaman penghapus
        return redirect('/penghapus');
    }

    // method untuk hapus data penghapus
    public function hapus($id)
    {
        // menghapus data penghapus berdasarkan id yang dipilih
        DB::table('penghapus')->where('ID', $id)->delete();

        // alihkan halaman ke halaman penghapus
        return redirect('/penghapus');
    }

    // method untuk mencari data penghapus
    public function cari(Request $request)
    {
        // menangkap data pencarian
        $cari = $request->cari;

        // mengambil data dari table penghapus sesuai pencarian data
        $penghapus = DB::table('penghapus')
            ->where(function ($query) use ($cari) {
                $query->where('merkpenghapus', 'like', "%" . $cari . "%")
                    ->orWhere('hargapenghapus', 'like', "%" . $cari . "%")
                    ->orWhere('berat', 'like', "%" . $cari . "%");

                    if (strtolower($cari) === 'tersedia') {
                        $query->orWhere('tersedia', 1);
                    } elseif (strtolower($cari) === 'tidak tersedia') {
                        $query->orWhere('tersedia', 0);
                    }
            })
            ->paginate();

        // mengirim data penghapus ke view index
        return view('penghapus/indexpenghapus', ['penghapus' => $penghapus, 'cari' => $cari]);

    }
}
