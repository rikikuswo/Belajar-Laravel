{{-- Menghubungkan template --}}
@extends('master')

{{-- Judul --}}
@section('judul', 'Add Data')

@section('konten')
    <a href="/mahasiswa" class="btn btn-secondary mb-2">Kembali</a>
    <br>
    {{-- @if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $er)
                <li>{{ $er }}</li>
            @endforeach
        </ul>
    </div>
    @endif --}}
    <form action="/mahasiswa/save" method="POST" class="form-group">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="">Nama</label>
            <input type="text" name="nama" class="form-control">
            @if($errors->has('nama'))
                <div class="text-danger">
                    {{ $errors->first('nama') }}
                </div>
            @endif
        </div>
        <div class="form-group">
            <label for="">NIM</label>
            <input type="text" name="nim" class="form-control">
            @if($errors->has('nim'))
                <div class="text-danger">
                    {{ $errors->first('nim') }}
                </div>
            @endif
        </div>
        <div class="form-group">
            <label for="">Alamat</label>
            <textarea name="alamat" class="form-control"></textarea>
            @if($errors->has('nim'))
                <div class="text-danger">
                    {{ $errors->first('alamat') }}
                </div>
            @endif
        </div>
        <div class="form-group">
            <input type="submit" value="Save Data" class="btn btn-primary mt-2">
        </div>
    </form>
@endsection
