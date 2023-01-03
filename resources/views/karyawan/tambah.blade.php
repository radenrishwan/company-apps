@extends('part.utama')

@section('content')
<div class="row">
    <div class="col-12">
        <h1 class="text-center">Tambah Data Karyawan</h1>
    </div>
</div>
<div class="border p-4">
    <form action="/karyawan" method="post">
        @csrf

        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" placeholder="Nama Kamu" name="nama"
                value="">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Alamat Email</label>
            <input type="email" class="form-control" id="email" placeholder="name@example.com" name="email"
                value="">
        </div>
        <div class="mb-3">
            <label for="jabatan" class="form-label">Jabatan</label>
            <input type="text" class="form-control" id="jabatan" placeholder="Driver" name="jabatan"
                value="">

        </div>
        <div class="mb-3">
            <label for="departemen" class="form-label">Departemen</label>
            <input type="text" class="form-control" id="departemen" placeholder="Divisi Jaringan" name="departemen"
                value="">
        </div>
        <!-- no tlp -->
        <div class="mb-3">
            <label for="no_telp" class="form-label">Nomor Telepon</label>
            <input type="text" class="form-control" id="no_telp" placeholder="081212312312" name="no_telp"
                value="">
        </div>
        <div class="mb-3">
            <label for="gaji" class="form-label">Gaji</label>
            <input type="number" class="form-control" id="gaji" placeholder="20000" name="gaji"
                value="">
        </div>
        <div class="mb-3">
            <label for="Alamat" class="form-label">Alamat</label>
            <textarea class="form-control" id="alamat" rows="3" name="alamat"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Tambah</button>
        <a href="{{url()->previous()}}" class="btn btn-link">Batal</a>
    </form>
</div>
@stop