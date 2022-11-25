@extends('dashboard.layouts.mainnew')

@section('container')
<style>
    /* .card {
            background-image: linear-gradient(to right, rgba(255, 0, 0, 0), rgb(76, 121, 255));
        } */
</style>
<div class="container py-5">
    @if (session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <div class="card mb-3">
        <div class=" card-header">Laporan</div>
        <div class="card-body">
            <div class="row justify-content-center">
                <div class="col-12">
                    <a href="/dashboard/reports/books" class="btn btn-sm btn-primary">Cetak Laporan Buku</a>
                    <a href="/dashboard/reports/users" class="btn btn-sm btn-primary">Cetak Laporan Petugas</a>
                    <a href="/dashboard/reports/members" class="btn btn-sm btn-primary">Cetak Laporan Anggota</a>
                    <a href="/dashboard/reports/confirm/transactions" class="btn btn-sm btn-primary">Cetak Laporan
                        Transaksi</a>
                </div>
            </div>
        </div>


    </div>
</div>
@endsection