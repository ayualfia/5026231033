@extends('template')

@section('content')
	<h3>Data Penghapus</h3>

	<a href="/penghapus/tambah" class="btn btn-primary"> + Tambah Penghapus Baru</a>
    <p>Cari Data Penghapus :</p>
	<form action="/penghapus/cari" method="GET">
		<div class="input-group mb-3">
            <input type="text" class="form-control" name="cari" placeholder="Cari penghapus ..">
            <button class="btn btn-info px-4" type="submit">CARI</button>
        </div>
	</form>

	<br/>

	<table class = "table table-striped table-hover align-middle text-center shadow-sm">
		<tr>
			<th>Merek Penghapus</th>
			<th>Harga</th>
			<th>Ketersediaan</th>
			<th>Berat</th>
			<th>Opsi</th>
		</tr>
		@foreach($penghapus as $p)
		<tr>
			<td>{{ $p->merkpenghapus }}</td>
			<td>{{ $p->hargapenghapus }}</td>
			<td>
                @if($p->tersedia == 1)
                    <span class="badge badge-pill badge-success">Tersedia</span>
                @else
                    <span class="badge badge-pill badge-danger">Tidak Tersedia</span>
                @endif
            </td>
			<td>{{ $p->berat }}</td>
			<td>
				<a href="/penghapus/edit/{{ $p->ID }}" class="btn btn-success">Edit</a>
				|
				<a href="/penghapus/hapus/{{ $p->ID }}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>


    {{ $penghapus->links()}}
@endsection
