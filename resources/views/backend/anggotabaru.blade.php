@extends('backend.main')

@section('judul','anggota baru')

@section('isi')


<table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">kelas</th>
      <th scope="col">alasan bergabung</th>
      <th scope="col">No Hp</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($daftar as $dft)
    <tr>
      <th scope="row">{{$loop->iteration}}</th>
      <td>{{$dft->Nama}}</td>
      <td>{{$dft->kelas}}</td>
      <td>{{$dft->alasan_bergabung}}</td>
      <td>{{$dft->No_Hp}}</td>
      
      <td>
        <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                  <form class="" action="/anggotabaru/{{ $dft->id }}" method="post">
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