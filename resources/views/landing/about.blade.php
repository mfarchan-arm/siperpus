@extends('landing.layouts.main')

@section('container')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css"
    integrity="sha256-2XFplPlrFClt0bIdPgpz8H7ojnk10H69xRqd9+uTShA=" crossorigin="anonymous" />

<div class="container py-5 mt-4">
    <div class="row align-items-center mb-5">
        <div class="col-lg-6 col-md-6 order-2 order-md-1 mt-4 pt-2 mt-sm-0 opt-sm-0">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 col-6">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 mt-4 pt-2">
                            <div class="card work-desk rounded border-0 shadow-lg overflow-hidden">
                                <img src="{{ asset('storage/images/1.jpeg') }}" class="img-fluid" alt="Image"
                                    style="width: 100%; height:362px; object-fit: cover;" />
                                <div class="img-overlay bg-dark"></div>
                            </div>
                        </div>
                    </div>
                    <!--end row-->
                </div>
                <!--end col-->

                <div class="col-lg-6 col-md-6 col-6">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="card work-desk rounded border-0 shadow-lg overflow-hidden">
                                <img src="{{ asset('storage/images/2.jpeg') }}" class="img-fluid" alt="Image"
                                    style="width: 100%; height:350px; object-fit: cover;" />
                                <div class="img-overlay bg-dark"></div>
                            </div>
                        </div>
                        <!--end col-->

                        <div class="col-lg-12 col-md-12 mt-4 pt-2">
                            <div class="card work-desk rounded border-0 shadow-lg overflow-hidden">
                                <img src="{{ asset('storage/images/3.jpeg') }}" class="img-fluid" alt="Image"
                                    style="width: 350px; height:300px; object-fit: cover;" />
                                <div class="img-overlay bg-dark"></div>
                            </div>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end col-->

        <div class="col-lg-6 col-md-6 col-12 order-1 order-md-2">
            <div class="section-title ml-lg-5">
                <h5 class="text-custom font-weight-normal mb-3">Tentang Kami</h5>
                <h4 class="title mb-4">
                    SI Perpus <br />
                    Sistem Informasi Perpustakaan SD Negeri 69 Kota Bengkulu
                </h4>
                <p class="text-muted mb-3">SI Perpus adalah situs perpustakaan SD Negeri 69 Kota Bengkulu. SI Perpus
                    memiliki fitur OPAC (Open Public Access Catalog), Helper (Bantuan), fitur pinjam-kembali buku yang
                    sangat memudahkan siswa dalam mengakses perpustakaan.</p>

                <a href="#visimisi" class="btn  btn-outline-primary btn-lg mx-1">Visi dan Misi</a>
                <a href="#struktur" class="btn  btn-outline-primary btn-lg mx-1">Struktur Organisasi</a>
                <a href="#kontak" class="btn  btn-outline-primary btn-lg mx-1">Kontak dan Lokasi</a>
            </div>
        </div>
    </div>
    <div class="row pb-0 align-items-center rounded-3 border shadow-lg mb-5" id="visimisi">
        <div class="col-lg-7 p-3 p-lg-5 pt-lg-3">
            <div class="lc-block mb-3">
                <div editable="rich">
                    <h4 class="title">Visi dan Misi</h4>
                </div>
            </div>
            <div class="lc-block mb-3">
                <div editable="rich">
                    <h4 class="title">Visi</h4>
                    <p>Mewujudkan warga sekolah yang berkarakter Cerdas, Terampil, dan Berwawasan Global
                    </p>
                    <h4 class="title">Misi</h4>
                    <p>1. Melaksanakan penguatan pendidikan karakter</p>
                    <p>2. Mewujudkan nilai-nilai karakter sebagai budaya sekolah</p>
                    <p>3. Membudayakan literasi dan numersi dikalangan peserta didik</p>
                    <p>4. Melaksanakan pembelajaran yang interaktif dan menyenangkan bagi peserta didik</p>
                    <p>5. Mengembakna kompetensi pendidik dan tenaga kependidikan</p>
                    <p>6. Mengembangkan bakat dan minat peserta didik terhadap seni dan budaya serta berwawasan global</p>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 offset-lg-1 p-0 overflow-hidden shadow-lg">
            <div class="lc-block"><img class="rounded" src="{{ asset('storage/images/2.jpeg') }}"
                    style="width: 100%; height:500px; object-fit: cover;"></div>
        </div>
    </div>
    <div class="row pb-0  align-items-center rounded-3 border shadow-lg mb-5" id="struktur">
        <div class="col-lg-4  p-0 overflow-hidden shadow-lg ml-2">
            <div class="lc-block"><img class="rounded" src="{{ asset('storage/images/1.jpeg') }}"
                    style="width: 100%; height:515px; object-fit: cover;"></div>
        </div>
        <div class="col-lg-7 p-3 p-lg-5 pt-lg-3">
            <div class="lc-block mb-3">
                <div editable="rich">
                    <h4 class="title">Struktur Organisasi</h4>

                </div>
            </div>
            <div class="lc-block mb-3">
                <div editable="rich">
                    <h4 class="title">Kepala Sekolah</h4>
                    <p class="lead">Susilowati, S.Pd</p>
                    <h4 class="title">Komite</h4>
                    <p class="lead">Sulianto, M.Pd</p>
                    <h4 class="title">Waka Bid. Kurikulum</h4>
                    <p class="lead">Fitri Ekawati, M.Pd</p>
                    <h4 class="title">Kapala Perpustakaan</h4>
                    <p class="lead">Yurni Sulaya, S.Pd</p>
                    <h4 class="title">Staff Perpustakaan</h4>
                    <p class="lead">Fatimawati S,Pd.</p>
                </div>
            </div>
        </div>

    </div>
    <div class="row pb-0  align-items-center rounded-3 border shadow-lg mb-5" id="kontak">
        <div class="col">
            <div class="p-3">

                <h4 class="title">Lokasi</h4>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3981.225415885122!2d102.27808529999999!3d-3.7610493999999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e36b1bf66d7f9db%3A0xa7c133b51b23f7b7!2sSD%20Negeri%2069%20Kota%20Bengkulu%20meta!5e0!3m2!1sid!2sid!4v1670164002223!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        <div class="col">
            <div class="p-3">
                <h4 class="title">Kontak Kami</h4>
                <p><i class="fa fa-map-marker-alt" ></i> Jl. WR. Supratman, Kandang Limun, Kec. Muara Bangka Hulu, Bengkulu</p>
                <p><i class="bi bi-telephone"></i> (0736) 343510 </p>
            </div>
        </div>
    </div>
    @endsection