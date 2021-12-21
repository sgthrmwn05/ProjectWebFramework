@extends('layouts.main')

@section('content')
<div class="col-lg-8">
    <form method="post" action="{{ url('/dashboard/posts/update' . $data->id) }}">
        @method('put')
      @csrf
        <div class="mb-3">
          <label for="nama" class="form-label">Nama Penyewa</label>
          <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" required value="{{ $data->nama }}">
          @error('nama')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
          @enderror
        </div>
        <div class="mb-3">
          <label for="no_hp" class="form-label">Nomor Handphone</label>
          <input type="text" class="form-control" id="no_hp" name="no_hp" required>
        </div>
        <div class="mb-3">
            <label for="lapangan" class="form-label">Pilih Lapangan</label>
            <select class="form-select" id="lapangan" name="lapangan" required>
                <option value="Lapangan 1">Lapangan 1</option>
                <option value="Lapangan 2">Lapangan 2</option>
                <option value="Lapangan 3">Lapangan 3</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="tanggal" class="form-label">Tanggal Sewa</label>
            <input type="date" class="form-control @error('tanggal') is-invalid @enderror" id="tanggal" name="tanggal" required>
            @error('tanggal')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
          @enderror
        </div>
        <div class="mb-3">
            <label for="jam" class="form-label">Pilih Jam Sewa</label>
            <select class="form-select" id="jam" name="jam" required>
                <option value="10.00">10:00</option>
                <option value="11.00">11:00</option>
                <option value="12.00">12:00</option>
                <option value="13.00">13:00</option>
                <option value="14.00">14:00</option>
                <option value="15.00">15:00</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="uang_muka" class="form-label">Uang Muka</label>
            <input type="text" class="form-control" id="uang_muka" name="uang_muka" required>
          </div>
        <button type="submit" class="btn btn-primary">Tambah Sewa</button>
      </form>
</div>
@endsection