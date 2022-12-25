@extends('dashboard.layouts.mainnew')

@section('container')

<div class="row justify-content-center">
    <div class="col-lg-8">
        <div class="card mb-4">
            <div class="card-body">
                <form method="post" action="/dashboard/raks" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-4">
                        <div class="col-sm-3">
                            <p class="mb-0">Nama Kategori</p>
                        </div>
                        <div class="col-sm-9">
                            <input type="text" class="form-control @error('kategori') is-invalid @enderror"
                                name="kategori" required placeholder="Masukkan Nama Kategori...">
                            @error('kategori')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-sm-3">
                            <p class="mb-0">Foto Kategori</p>
                        </div>
                        <div class="col-sm-9">
                            <input class="form-control" type="file" id="image" name="nama_gambar"
                                onchange="previewImage()" accept=".jpg,.gif,.png">
                        </div>
                    </div>
                    <button class="btn btn-primary" type="submit">Tambahkan Kategori</button>
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