@extends('backend.main')

@section('judul','kegiatan')

@section('isi')

<a href="/tambahkegiatan" class="btn btn-success my-2">Tambah kegiatan</a>

<table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">judul</th>
      <th scope="col">penjelasan</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($gso25a as $gsa)
    <tr>
      <th scope="row">{{$loop->iteration}}</th>
      <td>{{$gsa->judul}}</td>
      <td>{{$gsa->penjelasan}}</td>
      
      <td>
        <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                  <form class="" action="/kegiatanend/{{ $gsa->id }}" method="post">
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