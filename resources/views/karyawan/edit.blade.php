@extends('part.utama')

@section('content')
<div class="row">
    <div class="col-12">
        <h1 class="text-center">Edit Data Karyawan</h1>
    </div>
</div>
<div class="border p-4">
    <form action="/karyawan/{{ $karyawan->id }}" method="post">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" placeholder="Nama Kamu" name="nama"
                value="{{ $karyawan->nama }}">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Alamat Email</label>
            <input type="email" class="form-control" id="email" placeholder="name@example.com" name="email"
                value="{{ $karyawan->email }}">
        </div>
        <div class="mb-3">
            <label for="jabatan" class="form-label">Jabatan</label>
            <input type="text" class="form-control" id="jabatan" placeholder="Driver" name="jabatan"
                value="{{ $karyawan->jabatan }}">

        </div>
        <div class="mb-3">
            <label for="departemen" class="form-label">Departemen</label>
            <select class="form-select" aria-label="departement" name="departemen" id="departemen">
                @foreach($departements as $departement)
                @if($departement->nama == $karyawan->departemen)
                <option value="{{ $departement->nama }}" selected>{{ $departement->nama }}</option>
                @else
                <option value="{{ $departement->nama }}">{{ $departement->nama }}</option>
                @endif
                @endforeach
            </select>
        </div>
        <!-- no tlp -->
        <div class="mb-3">
            <label for="no_telp" class="form-label">Nomor Telepon</label>
            <input type="text" class="form-control" id="no_telp" placeholder="081212312312" name="no_telp"
                value="{{ strval($karyawan->no_telp) }}">
        </div>
        <div class="mb-3">
            <label for="gaji" class="form-label">Gaji</label>
            <input type="number" class="form-control" id="gaji" placeholder="20000" name="gaji"
                value="{{ $karyawan->gaji }}">
        </div>
        <div class="mb-3">
            <label for="Alamat" class="form-label">Alamat</label>
            <textarea class="form-control" id="alamat" rows="3" name="alamat">{{ $karyawan->alamat }}</textarea>
        </div>

        <button type="submit" class="btn btn-warning">Edit</button>
        <a href="{{url()->previous()}}" class="btn btn-link">Batal</a>
    </form>
</div>
@stop