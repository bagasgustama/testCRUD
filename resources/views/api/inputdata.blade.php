@extends('layout/main')

@section('title', 'Daftar Pegawai')

@section('container')
<div class="container">
  <div class="row">
    <form action="/api/inputdata/create" method="POST">
      {{csrf_field()}}
      <div class="form-group">
        <label for="inputId">Id</label>
        <input name="id" type="text" class="form-control" id="inputId" aria-describedby="namaHelp" placeholder="Id">
      </div>
      <div class="form-group">
        <label for="inputNama">Nama</label>
        <input name="nama" type="text" class="form-control" id="inputNama" aria-describedby="namaHelp" placeholder="Nama">
      </div>
      <div class="form-group">
        <label for="inputNim">NIM</label>
        <input name="nim" type="text" class="form-control" id="inputNim" aria-describedby="namaHelp" placeholder="NIM">
      </div>
      <div class="form-group">
        <label for="inputUsia">Usia</label>
        <input name="usia" type="text" class="form-control" id="inputUsia" aria-describedby="usiaHelp" placeholder="Usia">
      </div>
      <div class="form-group">
        <label for="inputJurusan">Jurusan</label>
        <input name="jurusan" type="text" class="form-control" id="inputJurusan" aria-describedby="jurusanHelp" placeholder="Jurusan">
      </div>
      <div class="form-group">
        <label for="inputAlamat">Alamat</label>
        <textarea name="alamat" class="form-control" id="inputAlamat" rows="3"></textarea>
      </div>
    
      <!-- <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
      </div> -->
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</div>

@endsection