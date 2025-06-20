@extends('template')

@section('content')
	<h3>Data Mahasiswa</h3>

	<a href="/mahasiswacb" class ="btn btn-info"> Kembali</a>

	<br/>
	<br/>

	<form action="/mahasiswacb/store" method="post">
		{{ csrf_field() }}
		<div class="row">
            <div class="col-3">
                NIM
            </div>
            <div class="col-8">
                <input type="number" name="nim" required="required" class="form-control"><br />
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                Nama
            </div>
            <div class="col-8">
                <input type="text" step="any" name="nama" required="required" class="form-control"><br />
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                Prodi
            </div>
            <div class="col-8">
                <input type="text" name="prodi" required="required" class="form-control"><br />
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                Tahun Masuk
            </div>
            <div class="col-8">
                <input type="number" name="tahun" required="required" class="form-control"><br />
            </div>
        </div>

		<input type="submit" value="Simpan Data" class="btn btn-success">
	</form>

@endsection
