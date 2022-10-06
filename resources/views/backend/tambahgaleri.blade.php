@extends('backend.main')

@section('judul','tambah_kegiatan')

@section('isi')
<h1 class="mt-3">Tambah galeri</h1>

    <form method="post" action='/prosestambahgaleri' enctype="multipart/form-data">
            @csrf
          <div class="mb-3 col-5">
          <div class="form-group">
              <label for="image">Pilih Foto</label>
              <input type="file" class="form-control-file" id="image" name="image">
          </div>
          <button type="submit" class="btn btn-primary">Tambah</button>
    </form>

@endsection