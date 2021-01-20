{{-- Menghubungkan template --}}
@extends('master')

{{-- Judul --}}
@section('judul', 'Data Mahasiswa')

@section('konten')
    <a href="/mahasiswa/add" class="btn btn-sm btn-primary">Tambah Data</a>
    |
    <a href="/mahasiswa/trash" class="btn btn-sm btn-warning">Sampah</a>
    <table class="table table-bordered table-sm">
        <thead>
            <tr>
                <th>Nama</th>
                <th>NIM</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($mahasiswa as $m)
                <tr>
                    <td>{{ $m->nama_mhs }}</td>
                    <td>{{ $m->nim }}</td>
                    <td>{{ $m->alamat }}</td>
                    <td>
                        <a href="/mahasiswa/update/{{ $m->id }}" class="btn btn-sm btn-outline-success">Edit</a>
                        <a href="/mahasiswa/delete/{{ $m->id }}" class="btn btn-sm btn-outline-danger">Del</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
