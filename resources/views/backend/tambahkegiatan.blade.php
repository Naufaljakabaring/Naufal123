@extends('backend.main')

@section('judul','tambah_kegiatan')

@section('isi')
<h1 class="mt-3">Tambah kegiatan</h1>

    <form method="post" action='/prosestambahkegiatan' enctype="multipart/form-data">
            @csrf
            <div class="mb-1 col-5">
            <label for="nama" class="form-label">judul</label>
            <input class="form-control @error('nama') is-invalid @enderror" id="judul" placeholder="masukan nama kegiatan" name="judul" require>
          </div>
          <div class="mb-1 col-5">
            <label for="nama" class="form-label">penjelasan</label>
            <input class="form-control @error('nama') is-invalid @enderror" id="penjelasan" placeholder="masukan penjelasan" name="penjelasan" require>
          </div>
          <div class="mb-3 col-5">
          <div class="form-group">
              <label for="image">Pilih Foto</label>
              <input type="file" class="form-control-file" id="image" name="image">
          </div>
          <button type="submit" class="btn btn-primary">Tambah</button>
    </form>

@endsection