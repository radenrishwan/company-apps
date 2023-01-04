@extends('part.utama')

@section('content')
<div class="row">
    <div class="col-12">
        <h1 class="text-center">Edit Data Departemen</h1>
    </div>
</div>
<div class="border p-4">
    <form action="/departement/{{ $departement->id }}" method="post">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="nama" class="form-label">Nama Departemen</label>
            <input type="text" class="form-control" id="nama" placeholder="R&D Teams" name="nama" value="{{ $departement->nama }}">
        </div>
        <div class="mb-3">
            <label for="kode" class="form-label">kode</label>
            <input type="kode" class="form-control" id="kode" placeholder="A001" name="kode" value="{{ $departement->kode }}">
        </div>
        <div class="mb-3">
            <label for="Alamat" class="form-label">Alamat</label>
            <textarea class="form-control" id="alamat" rows="3" name="alamat">{{ $departement->alamat }}</textarea>
        </div>
        <div class="mb-3">
            <label for="keterangan" class="form-label">Keterangan</label>
            <textarea class="form-control" id="keterangan" rows="3" name="keterangan">{{ $departement->keterangan }}</textarea>
        </div>

        <button type="submit" class="btn btn-warning">Edit</button>
        <a href="{{url()->previous()}}" class="btn btn-link">Batal</a>
    </form>
</div>
@stop