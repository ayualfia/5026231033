@extends('template')

@section('content')
	<h3>Data Mahasiswa </h3>

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

	<a href="/mahasiswacb/tambah" class="btn btn-primary"> + Tambah Mahasiswa Baru</a>
    <p>Cari Data Mahasiswa :</p>
	<form action="/mahasiswacb/cari" method="GET">
		<div class="input-group mb-3">
            <input type="text" class="form-control" name="cari" placeholder="Cari Mahasiswa ...">
            <button class="btn btn-info px-4" type="submit">CARI</button>
        </div>
	</form>

	<br/>
	<br/>

	<table class = "table table-striped table-hover align-middle text-center shadow-sm">
		<tr>
			<th>ID</th>
			<th>NIM</th>
			<th>Nama</th>
			<th>Prodi</th>
            <th>Tahun</th>
			<th>Opsi</th>
		</tr>
		@foreach($mahasiswa as $m)
		<tr>
			<td>{{ $m->ID }}</td>
			<td>{{ $m->NIM }}</td>
			<td>{{ $m->Nama }}</td>
			<td>{{ $m->Prodi }}</td>
            <td>{{ $m->TahunMasuk }}</td>
			<td>
				<a href="/mahasiswacb/edit/{{ $m->ID }}" class ="btn btn-success">Edit</a>
				|
				<a href="/mahasiswacb/hapus/{{ $m->ID }}" class ="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>

@endsection
