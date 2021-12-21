@extends('layouts.main')

@section('content')

<a style="float: left" href="/dashboard/posts/create" class="btn btn-primary">Tambah Data Booking</a>


<div class="row justify-content-end">
  <div class="col-md-3">
    <form class="form-inline" action="/dashboard/posts">
        <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Search.." name="search" value="{{ request('search') }}">
        <button class="btn btn-success" type="submit">Search</button>
      </div>
    </form>
  </div>
</div>

      @if (session()->has('success'))
          <div class="alert alert-primary alert-dismissible fade show" role="alert">
            {{ session('success') }}
          </div>
      @endif

  <table class="table table-secondary table-striped table-hover">
    <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Nama</th>
          <th scope="col">No. Handphone</th>
          <th scope="col">Lapangan</th>
          <th scope="col">Tanggal</th>
          <th scope="col">Jam</th>
          <th scope="col">Uang muka</th>
          <th scope="col">Bukti Struk</th>
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
            <td>Rp. {{ $book->uang_muka }}</td>
            <td><img style="max-height: 50px" src="{{ asset('storage/' . $book->image) }}" alt=""></td>
            <td>
              <a href="/dashboard/posts/{{ $book->id }}/edit"><button type="button" class="btn btn-warning">Ubah</button></a>
              <form action="/dashboard/posts/{{ $book->id }}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button class="btn btn-danger" onclick="return confirm('Yakin Ingin Menghapus Data?')">Hapus</button>
              </form>
            </td>
          </tr>
        @endforeach
      </tbody>
  </table>
@endsection