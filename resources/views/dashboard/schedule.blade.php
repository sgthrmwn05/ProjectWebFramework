@extends('layouts.main')

@section('content')
<div class="row justify-content-end">
  <div class="col-md-3">
    <form action="/dashboard/schedule">
      <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Search.." name="search" value="{{ request('search') }}">
        <button class="btn btn-success" type="submit">Search</button>
      </div>
    </form>
  </div>
</div>
  <table class="table table-secondary table-striped table-hover">
    <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Admin</th>
          <th scope="col">Nama</th>
          <th scope="col">No. Handphone</th>
          <th scope="col">Lapangan</th>
          <th scope="col">Tanggal</th>
          <th scope="col">Jam</th>
          <th scope="col">Uang muka</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($books as $book)
          <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $book->user->name }}</td>
            <td>{{ $book->nama }}</td>
            <td>{{ $book->no_hp }}</td>
            <td>{{ $book->lapangan }}</td>
            <td>{{ $book->tanggal }}</td>
            <td>{{ $book->jam }}</td>
            <td>Rp. {{ $book->uang_muka }}</td>
          </tr>
        @endforeach
      </tbody>
  </table>
@endsection