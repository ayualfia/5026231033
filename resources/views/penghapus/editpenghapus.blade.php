@extends('template')

@section('content')

    <h3>Edit penghapus</h3>

    <a href="/penghapus" class="btn btn-info"> Kembali</a>

    <br />
    <br />

    @foreach ($penghapus as $p)
        <form action="/penghapus/update" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $p->ID }}"> <br />
            <div class="row">
                <div class="col-3">
                    Merek Penghapus
                </div>
                <div class="col-8">
                    <input type="text" name="merek" required="required" class="form-control" value="{{ $p->merkpenghapus}}" ><br />
                </div>
            </div>
            <div class="row">
                <div class="col-3">
                    Harga
                </div>
                <div class="col-8">
                    <input type="number" name="harga" required="required" class="form-control" value="{{ $p->hargapenghapus }}"><br />
                </div>
            </div>
            <div class="row">
                <div class="col-3">
                    Ketersediaan
                </div>
                <div class="col-8">
                    <select name="tersedia" required="required" class="form-control" value="{{ $p->tersedia }}">
                        <option value="1" {{ $p->tersedia == 1 ? 'selected' : '' }}>Tersedia</option>
                        <option value="0" {{ $p->tersedia == 0 ? 'selected' : '' }}>Tidak Tersedia</option>
                    </select><br />
                </div>
            </div>
            <div class="row">
                <div class="col-3">
                    Berat
                </div>
                <div class="col-8">
                    <input type="number" step="any" name="berat" required="required" class="form-control" value="{{ $p->berat }}"><br />
                </div>
            </div>
            <input type="submit" value="Simpan Data" class="btn btn-success">
        </form>
    @endforeach

@endsection
