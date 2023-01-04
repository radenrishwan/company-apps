@extends('part.utama')

@section('content')
<!-- title -->
<div class="row">
    <div class="col-12">
        <h1 class="text-center">Data Departemen</h1>
    </div>
</div>
<table class="table align-middle mb-0 bg-white">
    <thead class="bg-light">
        <tr>
            <th>Nama</th>
            <th>Kode</th>
            <th>Alamat</th>
            <th>Deskripsi</th>
            <th>Links</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($departements as $departement)
        <tr>
            <td>
                <div class="d-flex align-items-center">
                    <img src="https://mdbootstrap.com/img/new/avatars/5.jpg" alt="" style="width: 45px; height: 45px"
                        class="rounded-circle" />
                    <div class="ms-3">
                        <p class="fw-bold mb-1">{{ $departement->nama }}</p>
                    </div>
                </div>
            </td>
            <td>
                <p class="fw-normal mb-1">{{ $departement->kode }}</p>
            </td>
            <td>
                <p class="fw-normal mb-1">{{ $departement->alamat }}</p>
            </td>
            <td>
                <p class="fw-normal mb-1">{{ $departement->keterangan }}</p>
            </td>
            <td>
                <div class="btn-group gap-2">
                    <form action="">
                        <a href="/departement/edit/{{ $departement->id }}" class="btn btn-warning">Edit</a>
                    </form>
                    <form action="/departement/{{ $departement->id }}" method="POST">
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
    {{ $departements->links() }}
</div>
@stop