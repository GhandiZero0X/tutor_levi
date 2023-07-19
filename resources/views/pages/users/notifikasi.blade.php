@extends('Layout.appUser')

@section('content')
<div class="row pt-4">
    <div class="col">
        <div class="card mb-3">
            <div class="card-header text-center bg-primary">
                <h4 class="text-white">Notifikasi {{ $namaUser }}</h4>
            </div>
        </div>
    </div>
</div>
<div class="table-responsive">
    <table class="table table-striped border border-white">
        <thead>
            <tr>
                <th class="bg-primary text-white border-bottom">Tanggal Pengingat</th>
                <th class="bg-primary text-white">Judul Catatan</th>
            </tr>
        </thead>
        <tbody>
            @if ($pengingat->isEmpty())
            <tr>
                <td colspan="2" class="text-center">Belum ada Notifikasi yang masuk</td>
            </tr>
            @else
            @foreach($pengingat as $item)
            <tr>
                <td class="bg-light text-dark border-bottom">{{ $item->TANGGAL_PENGINGAT }}</td>
                <td class="bg-light text-dark">Yuk, selesaikan jadwalmu: {{ $item->jadwalHarian->kegiatan }}</td>
            </tr>
            @endforeach
            @endif
        </tbody>
    </table>
</div>
@endsection
