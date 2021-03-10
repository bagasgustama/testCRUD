@extends('layout/main')

@section('title', 'Daftar Pegawai')

@section('container')
    <div class="container">
      @if(session('sukses'))
        <div id="alert" class="alert alert-success" role="alert">
          {{session('sukses')}}
        </div>
      @endif
      <div class="row">
        <div class="col-10">
          <h1>List Pegawai</h1>
        </div>
        <div class="col-2">
          <!-- Button trigger modal -->
          <a class="btn btn-primary" href="{{ url('/pegawai/inputdata') }}">Tambah data</a>
        </div>
        <table class="table">
          <tr>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Usia</th>
            <th>Agama</th>
            <th>Alamat</th>
            <th>Aksi</th>
          </tr>
          @foreach($data_pegawai as $pegawai) <!-- untuk looping sebanyak data-->
          <tr>
            <td>{{$pegawai->nama}}</td>
            <td>{{$pegawai->jk}}</td>
            <td>{{$pegawai->usia}}</td>
            <td>{{$pegawai->agama}}</td>
            <td>{{$pegawai->alamat}}</td>
            <td>
              <a href="/pegawai/edit/{{$pegawai->id}}" class="btn btn-warning btn-sm">Edit</a>
              <a href="/pegawai/delete/{{$pegawai->id}}" class="btn btn-danger btn-sm" onclick="return confirm('Takin ingin dihapus?')">Hapus</a>
            <td>
          </tr>
          @endforeach <!-- mengakhiri looping-->
        </table>
      </div>
    </div>

@endsection

