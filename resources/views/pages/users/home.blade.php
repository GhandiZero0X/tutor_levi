@extends('Layout.appUser')

@section('content')
    <div class="row">
        <div class="col">
            <h1>Halaman Home</h1>
            <div class="card mb-3">
                <div class="card-header">
                    <h4>Catatan Harian</h4>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Nama User: {{ $namaUser }}</h5>
                    <p class="card-text">Isi catatan harian Anda di sini...</p>
                </div>
            </div>
        </div>
    </div>
@endsection
