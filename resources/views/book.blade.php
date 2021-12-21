@extends('layouts.main')

@section('content')
<a href="/create" class="btn btn-primary mb-3">Tambah Data Booking</a>
  <table class="table table-striped">
    <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Nama</th>
          <th scope="col">No. Handphone</th>
          <th scope="col">Lapangan</th>
          <th scope="col">Tanggal</th>
          <th scope="col">Jam</th>
          <th scope="col">Uang muka</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($books as $book)
          <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $book->nama }}</td>
            <td>{{ $book->no_hp }}</td>
            <td>{{ $book->lapangan }}</td>
            <td>{{ $book->tanggal }}</td>
            <td>{{ $book->jam }}</td>
            <td>{{ $book->uang_muka }}</td>
            <td>
              <button type="button" class="btn btn-warning">Ubah</button>
              <button type="button" class="btn btn-danger">Hapus</button>
            </td>
          </tr>
        @endforeach
      </tbody>
  </table>
@endsection