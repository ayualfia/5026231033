@extends('template')

@section('content')
	<h3>Data Karyawan</h3>

	<br/>

	<table class = "table table-striped table-hover align-middle text-center shadow-sm">
		<tr>
			<th>Kode Pegawai</th>
			<th>Nama Lengkap</th>
			<th>Divisi</th>
			<th>Departemen</th>
			<th>Opsi</th>
		</tr>
		@foreach($karyawan as $k)
		<tr>
			<td>{{ $k->kodepegawai }}</td>
			<td class="text-uppercase">{{ $k->namalengkap }}</td>
            <td>{{ $k->divisi }}</td>
            <td class="text-lowercase">{{ $k->departemen }}</td>
			<td>
				<a href="/karyawan2/hapus/{{ $k->kodepegawai }}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>

    <a href="/karyawan2/tambah" class="btn btn-primary mb-3 px-4"> + Tambah Karyawan Baru</a>


    {{ $karyawan->links()}}
@endsection
