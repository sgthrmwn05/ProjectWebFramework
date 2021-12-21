@extends('layouts.main')

@section('content')
<div class="col-lg-8">
    <form method="post" action="/dashboard/posts/{{ $model->id }}" enctype="multipart/form-data">
    {{-- @method('put') --}}
      @csrf
      <input type="hidden" name="_method" value="PATCH">
        <div class="mb-3">
          <label for="nama" class="form-label">Nama Penyewa</label>
          <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" required value="{{ $model->nama }}">
          @error('nama')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
          @enderror
        </div>
        <div class="mb-3">
          <label for="no_hp" class="form-label">Nomor Handphone</label>
          <input type="text" class="form-control @error('no_hp') is-invalid @enderror" id="no_hp" name="no_hp" required value="{{ $model->no_hp }}">
          @error('no_hp')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
          @enderror
        </div>
        <div class="mb-3">
            <label for="lapangan" class="form-label">Pilih Lapangan</label>
            <select class="form-select" id="lapangan" name="lapangan" required value="{{ $model->lapangan }}">
                <option value="Lapangan 1">Lapangan 1</option>
                <option value="Lapangan 2">Lapangan 2</option>
                <option value="Lapangan 3">Lapangan 3</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="tanggal" class="form-label">Tanggal Sewa</label>
            <input type="date" class="form-control @error('tanggal') is-invalid @enderror" id="tanggal" name="tanggal" required value="{{ $model->tanggal }}">
            @error('tanggal')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
          @enderror
        </div>
        <div class="mb-3">
            <label for="jam" class="form-label">Pilih Jam Sewa</label>
            <select class="form-select" id="jam" name="jam" required value="{{ $model->jam }}">
                <option value="10.00">10:00</option>
                <option value="11.00">11:00</option>
                <option value="12.00">12:00</option>
                <option value="13.00">13:00</option>
                <option value="14.00">14:00</option>
                <option value="15.00">15:00</option>
                <option value="16.00">16:00</option>
                <option value="17.00">17:00</option>
                <option value="18.00">18:00</option>
                <option value="19.00">19:00</option>
                <option value="20.00">20:00</option>
                <option value="21.00">21:00</option>
                <option value="22.00">22:00</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="uang_muka" class="form-label">Uang Muka</label>
            <input type="text" class="form-control" id="uang_muka" name="uang_muka" required value="{{ $model->uang_muka }}">
          </div>
          <div class="mb-3">
            <label for="image" class="form-label">Masukkan Bukti Struk</label>
            <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" required>
            @error('image')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
          @enderror
          </div>
        <button type="submit" class="btn btn-primary">Ubah Data</button>
      </form>
</div>
@endsection