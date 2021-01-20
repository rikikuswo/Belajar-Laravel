{{-- Menghubungkan template --}}
@extends('master')

{{-- Judul --}}
@section('judul', 'Update Data')

@section('konten')
    <a href="/mahasiswa" class="btn btn-secondary mb-2">Kembali</a>
    <br>
    <form action="/mahasiswa/saveupdate/{{ $mahasiswa->id }}" method="POST" class="form-group">
        {{ csrf_field() }}
        {{ method_field('PUT') }}
        <div class="form-group">
            <label for="">Nama</label>
            <input type="text" name="nama" class="form-control" value="{{ $mahasiswa->nama_mhs }}">
            @if($errors->has('nama'))
                <div class="text-danger">
                    {{ $errors->first('nama') }}
                </div>
            @endif
        </div>
        <div class="form-group">
            <label for="">NIM</label>
            <input type="text" name="nim" class="form-control" value="{{ $mahasiswa->nim }}">
            @if($errors->has('nim'))
                <div class="text-danger">
                    {{ $errors->first('nim') }}
                </div>
            @endif
        </div>
        <div class="form-group">
            <label for="">Alamat</label>
            <textarea name="alamat" class="form-control">{{ $mahasiswa->alamat }}</textarea>
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
