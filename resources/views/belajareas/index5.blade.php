@extends('template')

@section('content')

    <div class="container mt-4"> <div class=" card-body bg-success text-white d-flex align-items-center justify-content-center "> <p class="mb-0 text-center text-dark lead"> Anda Pengunjung ke :
                <span class="badge badge-dark p-2 ml-2">{{$jumlahpengunjung}}</span> </p>
        </div>
@endsection
