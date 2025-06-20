@extends('template')

@section('content')

	<h3>Edit Pegawai</h3>

	<a href="/mahasiswacb" class="btn btn-info"> Kembali</a>

	<br/>
	<br/>

	@foreach($mahasiswa as $m)
	<form action="/mahasiswacb/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $m->ID }}"> <br/>
        <div class="row">
            <div class="col-3">
                NIM
            </div>
            <div class="col-8">
                <input type="number" step="any"  name="nim" required="required" class="form-control" value="{{ $m->NIM}}" ><br />
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                Nama
            </div>
            <div class="col-8">
                <input type="text" name="nama" required="required" class="form-control" value="{{ $m->Nama}}" ><br />
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                Prodi
            </div>
            <div class="col-8">
                <input type="text" name="prodi" required="required" class="form-control" value="{{ $m->Prodi}}" ><br />
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                Tahun Masuk
            </div>
            <div class="col-8">
                <input type="number" step="any"  name="tahun" required="required" class="form-control" value="{{ $m->TahunMasuk}}" ><br />
            </div>
        </div>

		<input type="submit" value="Simpan Data" class="btn btn-success">
	</form>
	@endforeach

@endsection
