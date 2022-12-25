@extends('dashboard.layouts.mainnew')

@section('container')
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card mb-4">
                <div class="card-body">
                    <form method="post" action="/dashboard/raks/{{ $rak->id }}" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">ID.</p>
                            </div>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="id" value="{{ old('id', $rak->id) }}"
                                    readonly>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Nama Kategori</p>
                            </div>
                            <div class="col-sm-9">
                                <input type="text" class="form-control @error('kategori') is-invalid @enderror"
                                    name="kategori" required value="{{ old('kategori', $rak->kategori) }}">
                                @error('kategori')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Gambar Kategori</p>
                            </div>
                            <div class="col-sm-9">
                                <input class="form-control" type="file" id="image" name="nama_gambar"
                                    onchange="previewImage()" accept=".jpg,.gif,.png">
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col">
                                @if ($rak->nama_gambar)
                                    <img src="{{ asset('storage/images/' . $rak->nama_gambar) }}"
                                        class="img-preview img-fluid mb-3 col-sm-5 d-block">
                                @else
                                    <img class="img-preview img-fluid mb-3 col-sm-5">
                                @endif
                                <p class="text-muted mb-1">Preview Profile</p>
                            </div>
                        </div>
                        <hr>
                        <button class="btn btn-primary" type="submit">Ubah Kategori</button>
                    </form>
                </div>
            </div>
        </div>

    </div>
    <script>
        function previewImage() {
                const image = document.querySelector('#image');
                const imgPreview = document.querySelector('.img-preview');
    
                imgPreview.style.display = 'block';
    
                const oFReader = new FileReader();
    
                oFReader.readAsDataURL(image.files[0]);
    
                oFReader.onload = function(oFREvent) {
                    imgPreview.src = oFREvent.target.result;
                }
            }
    </script>
@endsection
