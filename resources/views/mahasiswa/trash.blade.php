{{-- Menghubungkan template --}}
@extends('master')

{{-- Judul --}}
@section('judul', 'Data Sampah Mahasiswa')

@section('konten')
    <a href="/mahasiswa" class="btn btn-sm btn-primary">Data Mahasiswa</a>
    |
    <a href="/mahasiswa/trash" class="btn btn-sm btn-warning">Sampah</a>
    |
    <a href="/mahasiswa/restore_all" class="btn btn-sm btn-success">Restore Semua Data</a>
    |
    <a href="/mahasiswa/del_permanent_all" class="btn btn-sm btn-danger">Hapus Permanen Semua Data</a>
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
                        <a href="/mahasiswa/restore/{{ $m->id }}" class="badge badge-success">Restore</a>
                        <a href="/mahasiswa/del_permanent/{{ $m->id }}" class="badge badge-danger">Permanent</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
