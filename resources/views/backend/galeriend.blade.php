@extends('backend.main')

@section('judul','galeri')

@section('isi')

<a href="/tambahgaleri" class="btn btn-success my-2">Tambah galeri</a>

<table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">foto</th>
      <th scope="col">Aksi</th>

    </tr>
  </thead>
  <tbody>
  @foreach ($galeri as $glr)
    <tr>
      <th scope="row">{{$loop->iteration}}</th>
      <td>{{$glr->foto}}</td>
      
      
      <td>
        <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                  <form class="" action="/galeriend/{{ $glr->id }}" method="post">
                     @method('delete')
                     @csrf
                     <button type="submit" onclick="return confirm('Yakin dek? afa iyyah?')" class="btn btn-danger">Hapus</button>
   
                   </form>
        </div>
      </td>
    </tr>
    @endforeach
    </tbody>
</table>

@endsection