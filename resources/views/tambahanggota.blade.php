@extends('index')

@section('content')

<h1 class="mt-3">pendaftaran anggota baru</h1>

    <form method="post" action='/prosestambahanggota'>
            @csrf
            <div class="mb-1 col-5">
            <label for="nama" class="form-label">Nama</label>
            <input class="form-control @error('nama') is-invalid @enderror" id="Nama" placeholder="masukan nama" name="Nama" require>
          </div>
          <div class="mb-1 col-5">
            <label for="nama" class="form-label">kelas</label>
            <input class="form-control @error('nama') is-invalid @enderror" id="kelas" placeholder="masukan kelas" name="kelas" require>
          </div>
          <div class="mb-1 col-5">
            <label for="nama" class="form-label">alasan bergabung</label>
            <input class="form-control @error('nama') is-invalid @enderror" id="alasan bergabung" placeholder="masukan alasan" name="alasan_bergabung" require>
          </div>
          <div class="mb-1 col-5">
            <label for="nama" class="form-label">No Hp</label>
            <input class="form-control @error('nama') is-invalid @enderror" id="No Hp" placeholder="masukan No hp" name="No_Hp" require>
          </div>
          <button type="submit" class="btn btn-primary">daftar</button>
    </form>



@endsection