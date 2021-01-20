{{-- Menghubungkan template --}}
@extends('master')

{{-- Judul --}}
@section('judul', 'Edit Data')

@section('konten')
    <p>Ini adalah konten Edit Data!</p>
    <a href="/user" class="btn btn-sm btn-secondary">- Kembali</a>
    <br>
    @foreach ($datauser as $d)
    <form action="/user/saveUpdate" method="post" class="form-group">
    {{ csrf_field() }}
    <input type="hidden" name="id" value="{{ $d->id}}" class="form-control"> <br>
    Nama
    <input type="text" name="nama" value="{{ $d->name }}" class="form-control"><br>
    Email
    <input type="text" name="email" value="{{ $d->email }}" class="form-control"><br>
    <input type="submit" value="Save Data" class="btn btn-sm btn-success">
    </form>

    @endforeach
@endsection
