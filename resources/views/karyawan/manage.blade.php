@extends('part.utama')

@section('content')
<!-- title -->
<div class="row">
    <div class="col-12">
        <h1 class="text-center">Edit Data Karyawan</h1>
    </div>
</div>
<table class="table align-middle mb-0 bg-white">
    <thead class="bg-light">
        <tr>
            <th>Nama</th>
            <th>Jabatan</th>
            <th>Gaji</th>
            <th>Edit</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($karyawans as $karyawan)
        <tr>
            <td>
                <div class="d-flex align-items-center">
                    <img src="https://mdbootstrap.com/img/new/avatars/8.jpg" alt="" style="width: 45px; height: 45px"
                        class="rounded-circle" />
                    <div class="ms-3">
                        <p class="fw-bold mb-1">{{ $karyawan->nama }}</p>
                        <p class="text-muted mb-0">{{ $karyawan->email }}</p>
                    </div>
                </div>
            </td>
            <td>
                <p class="fw-normal mb-1">{{ $karyawan->jabatan }}</p>
                <p class="text-muted mb-0">{{ $karyawan->departemen }}</p>
            </td>
            <td>
                Rp. {{ $karyawan->gaji }}
            </td>
            <td>
                <div class="btn-group gap-2">
                    <form action="">
                        <a href="/karyawan/edit/{{ $karyawan->id }}" class="btn btn-warning">Edit</a>
                    </form>
                    <form action="/karyawan/{{ $karyawan->id }}" method="POST">
                        @csrf
                        @method('DELETE')

                        <button class="btn btn-danger">Delete</button>
                    </form>
                </div>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<div class="d-flex mx-auto mt-5">
    {{ $karyawans->links() }}
</div>
@stop