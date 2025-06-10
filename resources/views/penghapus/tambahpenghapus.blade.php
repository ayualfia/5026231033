@extends('template')

@section('content')

    <h3>Data penghapus</h3>

    <a href="/penghapus" class="btn btn-info">Kembali</a>

    <br />
    <br />

    <form action="/penghapus/store" method="post">
        {{ csrf_field() }}
        <div class="row">
            <div class="col-3">
                Merek Penghapus
            </div>
            <div class="col-8">
                <input type="text" name="merek" required="required" class="form-control"><br />
            </div>
        </div>

        <div class="row">
            <div class="col-3">
                Harga
            </div>
            <div class="col-8">
                <input type="number" name="harga" required="required" class="form-control"><br />
            </div>
        </div>

        <div class="row">
            <div class="col-3">
                Ketersediaan
            </div>
            <div class="col-8">
                <select name="tersedia" required="required" class="form-control">
                    <option value="1">Tersedia</option>
                    <option value="0">Tidak Tersedia</option>
                </select><br/>
            </div>
        </div>

        <div class="row">
            <div class="col-3">
                Berat
            </div>
            <div class="col-8">
                <input type="number" step="any" name="berat" required="required" class="form-control"><br />
            </div>
        </div>

        <input type="submit" value="Simpan Data" class="btn btn-success">
    </form>

@endsection
