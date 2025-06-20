@extends('template')

@section('content')

    <h3>Edit Karyawan</h3>

    <a href="/eas" class="btn btn-info"> Kembali</a>

    <br />
    <br />

    @foreach ($mykaryawan as $k)
        <form action="/eas/update" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $k->kodepegawai }}"> <br />
            <div class="row">
                <div class="col-3">
                    Kode Pegawai
                </div>
                <div class="col-8">
                    <input type="text" name="kodepegawai" required="required" class="form-control" readonly  value="{{ $k->kodepegawai}}"><br />
                </div>
            </div>

            <div class="row">
                <div class="col-3">
                    Nama Lengkap
                </div>
                <div class="col-8">
                    <input type="text" readonly name="namalengkap" required="required" class="form-control" readonly value="{{ $k->namalengkap}}"><br />
                </div>
            </div>

            <div class="row">
                <div class="col-3">
                    Divisi
                </div>
                <div class="col-8">
                    <input type="text" name="divisi" required="required" class="form-control" readonly value="{{ $k->divisi}}"><br />
                </div>
            </div>

            <div class="row">
                <div class="col-3">
                    Departemen
                </div>
                <div class="col-8">
                    <input type="text" name="departemen" required="required" class="form-control" readonly  value="{{ $k->departemen}}"><br />
                </div>
            </div>

        </form>
    @endforeach

@endsection
