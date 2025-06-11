@extends('template')

@section('content')
	<h3>Data Keranjang Belanja</h3>

	<a href="/keranjangbelanja/tambah" class="btn btn-primary mb-3  px-4"> + Beli </a>

	<br/>

	<table class = "table table-striped table-hover align-middle text-center shadow-sm">
		<tr>
			<th>Kode Barang</th>
			<th>Jumlah Pembelian</th>
			<th>Harga per item</th>
			<th>Total</th>
			<th>Action</th>
		</tr>
		@foreach($keranjangbelanja as $kb)
		<tr>
			<td>{{ $kb->KodeBarang }}</td>
			<td>{{ $kb->Jumlah }}</td>
            <td>Rp {{ number_format($kb->Harga, 0, ',', '.') }} </td>
            <td>Rp {{ number_format($kb->Jumlah * $kb->Harga, 0, ',', '.') }}</td>
			<td>
				<a href="/keranjangbelanja/hapus/{{ $kb->ID }}" class="btn btn-danger">Batal</a>
			</td>
		</tr>
		@endforeach
	</table>


    {{ $keranjangbelanja->links()}}
@endsection
