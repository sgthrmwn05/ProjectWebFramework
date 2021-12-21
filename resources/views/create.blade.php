@extends('layouts.main')

@section('content')
<div class="col-lg-8">
    <form method="post" action="/store">
        <div class="mb-3">
          <label for="nama" class="form-label">Nama Penyewa</label>
          <input type="text" class="form-control" id="nama" name="nama">
        </div>
        <div class="mb-3">
          <label for="no_hp" class="form-label">Nomor Handphone</label>
          <input type="text" class="form-control" id="no_hp" name="no_hp">
        </div>
        <div class="mb-3">
            <label for="lapangan" class="form-label">Pilih Lapangan</label>
            <select class="form-select" id="lapangan" name="lapangan">
                <option selected>Silahkan Pilih Lapangan</option>
                <option value="1">Lapangan 1</option>
                <option value="2">Lapangan 2</option>
                <option value="3">Lapangan 3</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="tanggal" class="form-label">Tanggal Sewa</label>
            <input type="date" class="form-control" id="tanggal" name="tanggal">
        </div>
        <div class="mb-3">
            <label for="jam" class="form-label">Pilih Jam Sewa</label>
            <select class="form-select" id="jam" name="jam">
                <option selected>Silahkan Pilih Jam</option>
                <option value="1">10:00</option>
                <option value="2">11:00</option>
                <option value="3">12:00</option>
                <option value="1">13:00</option>
                <option value="2">14:00</option>
                <option value="3">15:00</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="uang_muka" class="form-label">Uang Muka</label>
            <input type="text" class="form-control" id="uang_muka" name="uang_muka">
          </div>
        <button type="submit" class="btn btn-primary">Tambah Sewa</button>
      </form>
</div>
@endsection