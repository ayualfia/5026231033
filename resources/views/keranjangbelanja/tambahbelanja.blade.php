@extends('template')

@section('content')

    <h3>Tambah Keranjang Belanja</h3>

    <a href="/keranjangbelanja" class="btn btn-info">Kembali</a>

    <br />

    <form action="/keranjangbelanja/store" method="post">
        {{ csrf_field() }}
        <div class="row">
            <div class="col-3">
                Kode Barang
            </div>
            <div class="col-8">
                <input type="text" name="KodeBarang" required="required" class="form-control"><br />
            </div>
        </div>

        <div class="row">
            <div class="col-3">
                Jumlah Pembelian
            </div>
            <div class="col-8">
                <input type="text" name="Jumlah" required="required" class="form-control"><br />
            </div>
        </div>

        <div class="row">
            <div class="col-3">
                Harga per item
            </div>
            <div class="col-8">
                <input type="text" name="Harga" required="required" class="form-control"><br />
            </div>
        </div>

        <input type="submit" value="Simpan Pembelian" class="btn btn-success">
    </form>

@endsection
