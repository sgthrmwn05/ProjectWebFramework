@extends('layouts.main')

@section('content')
  {{-- <select class="form-select" aria-label="Default select example">
    <option selected>Pilih Lapangan</option>
    <option value="1">Lapangan 1</option>
    <option value="2">Lapangan 2</option>
    <option value="3">Lapangan 3</option>
  </select> --}}

    <form class="row g-3">
    <div class="col-md-6">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" class="form-control" id="nama">
    </div>
    <div class="col-md-6">
        <label for="lapangan" class="form-label">State</label>
        <select id="lapangan" class="form-select">
        <option selected>Pilih Lapangan</option>
        <option>Lapangan 1</option>
        <option>Lapangan 2</option>
        <option>Lapangan 3</option>
        </select>
    </div>
    <div class="col-md-4">
        <label for="tanggal" class="form-label">Tanggal</label>
        <input type="date" class="form-control" id="tanggal">
    </div>
    <div class="col-md-2">
        <label for="dari_jam" class="form-label">Dari Jam</label>
        <input type="time" class="form-control" id="dari_jam">
    </div>
    <div class="col-md-2">
        <label for="sampai_jam" class="form-label">Sampai Jam</label>
        <input type="time" class="form-control" id="sampai_jam">
    </div>
    <div class="col-md-4">
        <label for="dp" class="form-label">Uang muka</label>
        <input type="text" class="form-control" id="dp">
    </div>
    <div class="col-12">
        <button type="submit" class="btn btn-primary">Tambah</button>
    </div>
    </form>
  
@endsection