@extends('layout/main')

@section('title', 'Daftar Pegawai')

@section('container')
    <div class="container">
      <h2>Edit Data Pegawai</h2>
      @if(session('sukses'))
        <div class="alert alert-success" role="alert">
          {{session('sukses')}}
        </div>
      @endif
      <div class="row">
        <div class="col-lg-12">
          <form action="/pegawai/update/{{$pegawai->id}}" method="POST">
            {{csrf_field()}}
            <div class="form-group">
              <label for="inputNama">Nama</label>
              <input name="nama" type="text" class="form-control" id="inputNama" aria-describedby="namaHelp" placeholder="Nama" value="{{$pegawai->nama}}">
            </div>
            <div>
              <label for="jkRadios">Jenis Kelamin</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="jk" id="lRadios" value="L" @if($pegawai->jk == 'L') checked @endif>
              <label class="form-check-label" for="lRadios">
                Laki-laki
              </label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="jk" id="pRadios" value="P" @if($pegawai->jk == 'P') checked @endif>
              <label class="form-check-label" for="pRadios">
                Perempuan
              </label>
            </div>
            <div class="form-group">
              <label for="inputUsia">Usia</label>
              <input name="usia" type="text" class="form-control" id="inputUsia" aria-describedby="usiaHelp" placeholder="Usia" value="{{$pegawai->usia}}" >
            </div>
            <div>
              <label for="agama">Agama</label>
              <select class="form-control" id="agama" name="agama">
                <option value="Islam" @if($pegawai->agama == 'Islam') selected @endif>Islam</option>
                <option value="Protestan" @if($pegawai->agama == 'Protestan') selected @endif>Protestan</option>
                <option value="Katolik" @if($pegawai->agama == 'Katolik') selected @endif>Katolik</option>
                <option value="Hindu" @if($pegawai->agama == 'Hindu') selected @endif>Hindu</option>
                <option value="Buhda" @if($pegawai->agama == 'Buhda') selected @endif>Buhda</option>
              </select>
            </div>
            <div class="form-group">
              <label for="inputAlamat">Alamat</label>
              <textarea name="alamat" class="form-control" id="inputAlamat" rows="3">{{$pegawai->alamat}}</textarea>
            </div>
          
            <!-- <div class="form-group form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div> -->
            <button type="submit" class="btn btn-warning">Update</button>
          </form>
        </div>
      </div>
    </div>

@endsection

