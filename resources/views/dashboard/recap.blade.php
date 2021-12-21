@extends('layouts.main')

@section('content')

<div class="row justify-content-end">
  <div class="col-md-3">
    <form action="/dashboard/recap">
      <div class="input-group mb-3">
        <input type="date" class="form-control" name="search" value="{{ request('search') }}">
        <button class="btn btn-success" type="submit">Search</button>
      </div>
    </form>
  </div>
</div>

<div class="container">
  <div style="text-align: center" class="row">
    <div class="col">
      <h5>Lapangan 1</h5>
      <table class="table table-bordered table-primary table-striped table-hover">
        <thead>
          <tr>
            <th scope="col">Jam</th>
            <th scope="col">Atas Nama</th>
          </tr>
        </thead>
        @foreach ($books->where('lapangan', 'Lapangan 1') as $book)
        <tbody>
          <tr>
            <th scope="row">{{ $book->jam }}</th>
            <td>{{ $book->nama }}</td>
          </tr>
        </tbody>
        @endforeach
      </table>
    </div>
    <div class="col">
      <h5>Lapangan 2</h5>
      <table class="table table-bordered table-warning table-striped table-hover">
        <thead>
          <tr>
            <th scope="col">Jam</th>
            <th scope="col">Atas Nama</th>
          </tr>
        </thead>
        @foreach ($books->where('lapangan', 'Lapangan 2') as $book)
        <tbody>
          <tr>
            <th scope="row">{{ $book->jam }}</th>
            <td>{{ $book->nama }}</td>
          </tr>
        </tbody>
        @endforeach
      </table>
    </div>
    <div class="col">
      <h5>Lapangan 3</h5>
      <table class="table table-bordered table-danger table-striped table-hover">
        <thead>
          <tr>
            <th scope="col">Jam</th>
            <th scope="col">Atas Nama</th>
          </tr>
        </thead>
        @foreach ($books->where('lapangan', 'Lapangan 3') as $book)
        <tbody>
          <tr>
            <th scope="row">{{ $book->jam }}</th>
            <td>{{ $book->nama }}</td>
          </tr>
        </tbody>
        @endforeach
      </table>
    </div>
  </div>
</div>
@endsection