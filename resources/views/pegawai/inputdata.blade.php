@extends('layout/main')

@section('title', 'Daftar Pegawai')

@section('container')
<div class="container">
  <div class="row">
    <form action="/pegawai/inputdata/create" method="POST">
      {{csrf_field()}}
      <div class="form-group">
        <label for="inputNama">Nama</label>
        <input name="nama" type="text" class="form-control" id="inputNama" aria-describedby="namaHelp" placeholder="Nama">
      </div>
      <div>
        <label for="jkRadios">Jenis Kelamin</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="jk" id="lRadios" value="L">
        <label class="form-check-label" for="lRadios">
          Laki-laki
        </label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="jk" id="pRadios" value="P">
        <label class="form-check-label" for="pRadios">
          Perempuan
        </label>
      </div>
      <div class="form-group">
        <label for="inputUsia">Usia</label>
        <input name="usia" type="text" class="form-control" id="inputUsia" aria-describedby="usiaHelp" placeholder="Usia">
      </div>
      <div>
        <label for="agama">Agama</label>
        <select class="form-control" id="agama" name="agama">
          <option value="Islam">Islam</option>
          <option value="Protestan">Protestan</option>
          <option value="Katolik">Katolik</option>
          <option value="Hindu">Hindu</option>
          <option value="Buhda">Buhda</option>
        </select>
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