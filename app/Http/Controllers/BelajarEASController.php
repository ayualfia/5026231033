<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BelajarEASController extends Controller
{
    //
    public function index()
	{
    	// mengambil data dari table mahasiswa
		$mahasiswa = DB::table('mahasiswacoba')->get();

    	// mengirim data mahasiswa ke view index
		return view('belajareas/indexmc',['mahasiswa' => $mahasiswa]);

	}

	// method untuk menampilkan view form tambah mahasiswa
	public function tambah()
	{

		// memanggil view tambah
		return view('belajareas/tambahmc');

	}

	// method untuk insert data ke table mahasiswa
	public function store(Request $request)
	{
		// insert data ke table mahasiswa
		DB::table('mahasiswacoba')->insert([
			'NIM' => $request->nim,
            'Nama' => $request->nama,
			'Prodi' => $request->prodi,
			'TahunMasuk' => $request->tahun
		]);
		// alihkan halaman ke halaman mahasiswa
		return redirect('/mahasiswacb')->with('success', 'Data mahasiswa berhasil ditambahkan.');

	}

	// method untuk edit data mahasiswa
	public function edit($id)
	{
		// mengambil data mahasiswa berdasarkan id yang dipilih
		$mahasiswa = DB::table('mahasiswacoba')->where('ID',$id)->get();
		// passing data mahasiswa yang didapat ke view edit.blade.php
		return view('belajareas/editmc',['mahasiswa' => $mahasiswa]);

	}

	// update data mahasiswa
	public function update(Request $request)
	{
		// update data mahasiswa
		DB::table('mahasiswacoba')->where('ID',$request->id)->update([
			'NIM' => $request->nim,
            'Nama' => $request->nama,
			'Prodi' => $request->prodi,
			'TahunMasuk' => $request->tahun
		]);
		// alihkan halaman ke halaman mahasiswa
		return redirect('/mahasiswacb')->with('success', 'Data mahasiswa berhasil diperbarui.');
	}

	// method untuk hapus data mahasiswa
	public function hapus($id)
	{
		// menghapus data mahasiswa berdasarkan id yang dipilih
		DB::table('mahasiswacoba')->where('ID',$id)->delete();

		// alihkan halaman ke halaman mahasiswa
		return redirect('/mahasiswacb')->with('success', 'Data mahasiswa berhasil dihapus.');
	}

    // method untuk mencari data mahasiswa
    public function cari(Request $request)
    {
        // menangkap data pencarian
        $cari = $request->cari;

        // mengambil data dari table mahasiswa sesuai pencarian data
        $mahasiswa = DB::table('mahasiswacoba')
            ->where(function ($query) use ($cari) {
                $query->where('NIM', 'like', "%" . $cari . "%")
                    ->orWhere('Nama', 'like', "%" . $cari . "%")
                    ->orWhere('Prodi', 'like', "%" . $cari . "%")
                    ->orWhere('TahunMasuk', 'like', "%" . $cari . "%");
            })
            ->paginate();

        // mengirim data mahasiswa ke view index
        return view('belajareas/indexmc', ['mahasiswa' => $mahasiswa, 'cari' => $cari]);

    }

}
