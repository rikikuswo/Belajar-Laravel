{{-- Menghubungkan template --}}
@extends('master')

{{-- Judul --}}
@section('judul', 'Add Data')

@section('konten')
    <p>Ini adalah konten Home!</p>
    <a href="/user" class="btn btn-secondary mb-2">Kembali</a>
    <br>
    @if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $er)
                <li>{{ $er }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form action="/user/saveData" method="POST" class="form-group">
        {{ csrf_field() }}
        Nama
        <input type="text" name="nama" class="form-control"><br>
        Email
        <input type="text" name="email" class="form-control"><br>
        Password
        <input type="text" name="password" class="form-control"><br>
        <input type="submit" value="Save Data" class="btn btn-primary mt-2">
    </form>
@endsection
