@extends('part.utama')

@section('content')
<div class="card mb-3">
    <img src="https://mdbootstrap.com/img/new/avatars/1.jpg" class="card-img-top" alt="profile">
    <div class="card-body">
        <p class="card-text">
            <!-- Some borders are removed -->
        <ul class="list-group list-group-flush">
            <h5 class="list-group-item card-title">{{ $karyawan->nama }}</h5>
            <li class="list-group-item">Alamat : {{ $karyawan->alamat }}</li>
            <li class="list-group-item">Email : {{ $karyawan->email }}</li>
            <li class="list-group-item">Nomor Telepon : {{ $karyawan->no_telp }}</li>
            <li class="list-group-item"> Gaji : Rp. {{ $karyawan->gaji }}</li>
        </ul>
        </p>
        <p class="card-text"><small class="text-muted">Data pribadi</small></p>
    </div>
</div>
<div class="card">
    <div class="card-body">
        <ul class="list-group list-group-flush">
            <h5 class="list-group-item card-title">Data Karyawan</h5>
            <li class="list-group-item">Jabatan : {{ $karyawan->jabatan }}</li>
            <li class="list-group-item">Departemen : {{ $karyawan->departemen }}</li>
        </ul>
    </div>
</div>
@stop