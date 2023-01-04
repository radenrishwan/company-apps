@extends('part.utama')

@section('content')
<div class="row">
    <div class="col-12">
        <h1 class="text-center">Tambah Data Karyawan</h1>
    </div>
</div>
<div class="border p-4">
    <form action="/departement" method="post">
        @csrf

        <div class="mb-3">
            <label for="nama" class="form-label">Nama Departemen</label>
            <input type="text" class="form-control" id="nama" placeholder="R&D Teams" name="nama" value="">
        </div>
        <div class="mb-3">
            <label for="kode" class="form-label">kode</label>
            <input type="kode" class="form-control" id="kode" placeholder="A001" name="kode" value="">
        </div>
        <div class="mb-3">
            <label for="Alamat" class="form-label">Alamat</label>
            <textarea class="form-control" id="alamat" rows="3" name="alamat"></textarea>
        </div>
        <div class="mb-3">
            <label for="keterangan" class="form-label">Keterangan</label>
            <textarea class="form-control" id="keterangan" rows="3" name="keterangan"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Tambah</button>
        <a href="{{url()->previous()}}" class="btn btn-link">Batal</a>
    </form>
</div>
@stop