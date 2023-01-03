@extends('part.utama')

@section('content')
<div class="list-group list-group-checkable d-grid gap-2 border-0 w-auto">
    <a href="/karyawan" class="list-group-item rounded-3 py-3" for="listGroupCheckableRadios1">
        List Karyawan
        <span class="d-block small opacity-50">Lihat semua data karyawan</span>
    </a>

    <a href="/karyawan/add" class="list-group-item rounded-3 py-3" for="listGroupCheckableRadios2">
        Tambah Karyawan
        <span class="d-block small opacity-50">Tambah Karyawan baru</span>
    </a>

    <a href="/karyawan/manage" class="list-group-item rounded-3 py-3" for="listGroupCheckableRadios2">
        Edit data karyawan
        <span class="d-block small opacity-50">Edit Data Karyawan</span>
    </a>

    <a href="" class="list-group-item rounded-3 py-3" for="listGroupCheckableRadios3">
        Absensi
        <span class="d-block small opacity-50">Lihat data absensi</span>
    </a>

    <a href="" class="list-group-item rounded-3 py-3 list-group-item-danger" for="listGroupCheckableRadios3">
        Keluar
        <span class="d-block small opacity-50 ">Keluar aplikasi</span>
    </a>

</div>

@stop