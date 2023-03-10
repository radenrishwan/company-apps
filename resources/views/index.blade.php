@extends('part.utama')

@section('content')

<!-- greeting -->
<div class="row">
    <div class="col-12">
        <h1 class="text-center">Selamat Datang, {{ $user->name }}</h1>
    </div>
</div>

<div class="list-group list-group-checkable d-grid gap-2 border-0 w-auto mt-5">
    <a href="/karyawan" class="list-group-item rounded-3 py-3">
        List Karyawan
        <span class="d-block small opacity-50">Lihat semua data karyawan</span>
    </a>

    <a href="/karyawan/add" class="list-group-item rounded-3 py-3">
        Tambah Karyawan
        <span class="d-block small opacity-50">Tambah Karyawan baru</span>
    </a>

    <a href="/karyawan/manage" class="list-group-item rounded-3 py-3">
        Edit data karyawan
        <span class="d-block small opacity-50">Edit Data Karyawan</span>
    </a>

    <a href="/departement/add" class="list-group-item rounded-3 py-3">
        Tambah data departemen
        <span class="d-block small opacity-50">Tambah data departemen</span>
    </a>

    <a href="/departement" class="list-group-item rounded-3 py-3">
        Edit data departemen
        <span class="d-block small opacity-50">Edit Data </span>
    </a>

    <a href="/logout" class="list-group-item rounded-3 py-3 list-group-item-danger">
        Keluar
        <span class="d-block small opacity-50 ">Keluar aplikasi</span>
    </a>

</div>

@stop