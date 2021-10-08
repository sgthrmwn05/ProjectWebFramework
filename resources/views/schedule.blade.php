@extends('layouts.main')

@section('content')
  <table class="table table-striped">
    <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Nama</th>
          <th scope="col">Tanggal</th>
          <th scope="col">Lapangan</th>
          <th scope="col">Jam</th>
          <th scope="col">Uang muka</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>Sigit</td>
          <td>10-10-2021</td>
          <td>Lapangan 2</td>
          <td>02.00 - 04.00</td>
          <td>Rp. 50.000</td>
          <td>
            <button type="button" class="btn btn-warning">Ubah</button>
            <button type="button" class="btn btn-danger">Hapus</button>
          </td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>Basri</td>
          <td>10-10-2021</td>
          <td>Lapangan 1</td>
          <td>16.00 - 17.00</td>
          <td>Rp. 20.000</td>
          <td>
            <button type="button" class="btn btn-warning">Ubah</button>
            <button type="button" class="btn btn-danger">Hapus</button>
          </td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td >Udin</td>
          <td>09-10-2021</td>
          <td>Lapangan 1</td>
          <td>14.00 - 15.00</td>
          <td>Rp. 100.000</td>
          <td>
            <button type="button" class="btn btn-warning">Ubah</button>
            <button type="button" class="btn btn-danger">Hapus</button>
          </td>
        </tr>
      </tbody>
  </table>
@endsection