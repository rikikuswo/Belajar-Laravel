{{-- Menghubungkan template --}}
@extends('master')

{{-- Judul --}}
@section('judul', 'Ini Halaman CRUD User')

@section('konten')
    <form action="/user/search" method="GET">
        <input type="text" name="cari" class="form-control" placeholder="Cari Data..." value="{{ old('cari') }}">
        <input type="submit" class="btn btn-success mt-2" value="Search">
    </form>
    <br>
    <a href="/user/add" class="btn btn-primary mb-2">+ Add Data</a>
    <br>
    <table border="1" class="table table-sm table-bordered">
        <tr>
            <th>ID User</th>
            <th>Nama User</th>
            <th>Email</th>
            <th>Aksi</th>
        </tr>
        @foreach ($datauser as $d)
        <tr>
        <td>{{($datauser->currentPage() - 1) * $datauser->perPage() + $loop->iteration}}</td>
        <td>{{$d->name}}</td>
        <td>{{$d->email}}</td>
        <td>
            <a href="/user/update/{{$d->id}}" class="btn btn-sm btn-outline-primary">Edit</a>
            <a href="/user/delete/{{$d->id}}" class="btn btn-sm btn-outline-danger">Hapus</a>
        </td>
        </tr>
        @endforeach
    </table>
    Halaman: {{ $datauser->currentPage() }} <br/>
    Jumlah Data : {{ $datauser->total() }} <br/>
    Data Per Halaman : {{ $datauser->perPage() }} <br/>
    {{ $datauser->links("pagination::bootstrap-4") }}

@endsection
