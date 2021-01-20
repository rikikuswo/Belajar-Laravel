@extends('layouts.app')

@section('content')
<body>
    <div class="container mt-2 mb-2">
        <div class="card">
            <div class="card-body">
                <header>
                    <nav>
                        <a href="/user">CRUD USER</a>
                        |
                        <a href="/mahasiswa">ELOQUENT MAHASISWAS</a>
                    </nav>
                </header>
                <hr>
                    <h3>@yield('judul')</h3>
                    <p>@yield('konten')</p>
                <hr>
                <footer>
                    <h4 align = 'center'>THIS IS FOOTER</h4>
                </footer>
            </div>
        </div>
    </div>
</body>
@endsection
