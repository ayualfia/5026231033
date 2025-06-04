@extends('template')

@section('content')

    <h3>Edit Pegawai</h3>

    <a href="/pegawai" class="btn btn-info"> Kembali</a>

    <br />
    <br />

    @foreach ($pegawai as $p)
        <form action="/pegawai/update" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $p->pegawai_id }}"> <br />
            <div class="row">
                <div class="col-3">
                    Nama
                </div>
                <div class="col-8">
                    <input type="text" name="nama" required="required" class="form-control" value="{{ $p->pegawai_nama }}" ><br />
                </div>
            </div>
            <div class="row">
                <div class="col-3">
                    Jabatan
                </div>
                <div class="col-8">
                    <input type="text" name="jabatan" required="required" class="form-control" value="{{ $p->pegawai_jabatan }}"><br />
                </div>
            </div>
            <div class="row">
                <div class="col-3">
                    Umur
                </div>
                <div class="col-8">
                    <input type="number" name="umur" required="required" class="form-control" value="{{ $p->pegawai_umur }}"><br />
                </div>
            </div>
            <div class="row">
                <div class="col-3">
                    Alamat
                </div>
                <div class="col-8">
                    <textarea name="alamat" required="required" class="form-control">{{ $p->pegawai_alamat }}</textarea><br />
                </div>
            </div>
            <input type="submit" value="Simpan Data" class="btn btn-success">
        </form>
    @endforeach

@endsection
