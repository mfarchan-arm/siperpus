@extends('landing.layouts.main')

@section('container')
<section class="mt-5 text-center container">
    <div class="row py-lg-5">
        <div class="col-lg-6 py-5 col-md-8 mx-auto">
            <h1 class="font-weight-normal">Lihat Buku</h1>
            <p class=" text-muted">Jelajahi fitur OPAC dengan menggunakan fitur cari nama buku, fitur informasi buku</p>
            <p>
            <div class="container mt-3">
                <div class="row">
                    <div class="col">
                        <div>
                            <p>Cari berdasarkan judul buku</p>
                        </div>
                    </div>
                </div>
                <form action="/opac">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control text-white" placeholder="Cari..." name="search"
                            value="{{ request('search') }}" autofocus>
                        <button class="btn btn-primary" type="submit"><i class="bi bi-search"></i></button>
                    </div>
                </form>

                <a class="btn btn-warning btn-l rounded-pill" href="/opac/barcode"><i class="bi bi-search"> Cari Buku</i></a>

            </div>
            </p>
        </div>
    </div>
</section>
<div class="album py-5 bg-light">
    <div class="container">
        <h1 class="fw-light text-center">Buku Paket Kelas 1, 2, 3, 4, 5, dan 6</h1>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            <div class="col">
                <div class="card shadow-sm">
                    <img class="bd-placeholder-img card-img-top" width="100%" height="225"
                        src="{{ asset('storage/images/kelas1.jpg') }}">
                    <div class="card-body">
                        <p class="card-text">Buku Paket Kelas 1</p>
                        <div class="d-flex justify-content-between align-items-center">

                            <form action="/opac/paket" method="post" class="d-inline">
                                @csrf
                                <input type='hidden' name='kategori' value="Kelas 1">
                                <button class="btn btn-sm btn-outline-secondary" type="submit">Lihat Buku</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card shadow-sm">
                    <img class="bd-placeholder-img card-img-top" width="100%" height="225"
                        src="{{ asset('storage/images/kelas2.jpg') }}">
                    <div class="card-body">
                        <p class="card-text">Buku Paket Kelas 2</p>
                        <div class="d-flex justify-content-between align-items-center">

                            <form action="/opac/paket" method="post" class="d-inline">
                                @csrf
                                <input type='hidden' name='kategori' value="Kelas 2">
                                <button class="btn btn-sm btn-outline-secondary">Lihat Buku</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card shadow-sm">
                    <img class="bd-placeholder-img card-img-top" width="100%" height="225"
                        src="{{ asset('storage/images/kelas3.jpg') }}">

                    <div class="card-body">
                        <p class="card-text">Buku Paket Kelas 3</p>
                        <div class="d-flex justify-content-between align-items-center">

                            <form action="/opac/paket" method="post" class="d-inline">
                                @csrf
                                <input type='hidden' name='kategori' value="Kelas 3">
                                <button class="btn btn-sm btn-outline-secondary">Lihat Buku</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card shadow-sm">
                    <img class="bd-placeholder-img card-img-top" width="100%" height="225"
                        src="{{ asset('storage/images/kelas4.jpg') }}">
                    <div class="card-body">
                        <p class="card-text">Buku Paket Kelas 4</p>
                        <div class="d-flex justify-content-between align-items-center">

                            <form action="/opac/paket" method="post" class="d-inline">
                                @csrf
                                <input type='hidden' name='kategori' value="Kelas 4">
                                <button class="btn btn-sm btn-outline-secondary" type="submit">Lihat Buku</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card shadow-sm">
                    <img class="bd-placeholder-img card-img-top" width="100%" height="225"
                        src="{{ asset('storage/images/kelas5.jpg') }}">
                    <div class="card-body">
                        <p class="card-text">Buku Paket Kelas 5</p>
                        <div class="d-flex justify-content-between align-items-center">

                            <form action="/opac/paket" method="post" class="d-inline">
                                @csrf
                                <input type='hidden' name='kategori' value="Kelas 5">
                                <button class="btn btn-sm btn-outline-secondary">Lihat Buku</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card shadow-sm">
                    <img class="bd-placeholder-img card-img-top" width="100%" height="225"
                        src="{{ asset('storage/images/kelas6.jpg') }}">

                    <div class="card-body">
                        <p class="card-text">Buku Paket Kelas 6</p>
                        <div class="d-flex justify-content-between align-items-center">

                            <form action="/opac/paket" method="post" class="d-inline">
                                @csrf
                                <input type='hidden' name='kategori' value="Kelas 6">
                                <button class="btn btn-sm btn-outline-secondary">Lihat Buku</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


        </div>
        <h1 class="fw-light text-center mt-5">Daftar Buku</h1>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            <table class="table table-bordered border-primary">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Kategori Rak</th>
                        <th scope="col">Judul Buku</th>
                        <th scope="col">Barcode</th>
                        <th scope="col">Pengarang</th>
                        <th scope="col">Penerbit</th>
                        <th scope="col">Tahun Terbit</th>
                        <th scope="col">Eksemplar</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        @foreach ($books as $key => $book)
                        <td>{{ $books->firstItem() + $key }}</td>
                        <td>{{ $book->rak->kategori ?? 'None' }}</td>
                        <td>{{ $book->judul }}</td>
                        <td> {!! DNS1D::getBarcodeSVG($book->no_barcode, 'EAN13', 3, 70) !!}</td>
                        <td>{{ $book->pengarang }}</td>
                        <td>{{ $book->penerbit }}</td>
                        <td>{{ $book->thn_terbit }}</td>
                        <td>{{ $book->eksemplar }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="d-flex justify-content-center">
                {{ $books->links() }} </div>
        </div>
    </div>
</div>
</div>
@endsection