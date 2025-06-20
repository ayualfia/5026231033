@extends('template')

@section('content')
	<h3 class = "text-center" >Data Karyawan</h3>

	<br/>

	<table class = "table table-striped table-hover align-middle text-center shadow-sm">
		<tr>
			<th>Kode Pegawai</th>
			<th>Nama Lengkap</th>
			<th>Divisi</th>
			<th>Departemen</th>
			<th>Opsi</th>
		</tr>
		@foreach($mykaryawan as $k)
		<tr>
			<td>{{ $k->kodepegawai }}</td>
			<td class="text-capitalize">{{ $k->namalengkap }}</td>
            <td>{{ $k->divisi }}</td>
            <td>{{ $k->departemen }}</td>
			<td>
				<a href="/eas/edit/{{ $k->kodepegawai }}" class="btn btn-danger">edit</a>
                |
                <a href="/eas/view/{{ $k->kodepegawai }}" class="btn btn-danger">view</a>
			</td>
		</tr>
		@endforeach
	</table>

@endsection
