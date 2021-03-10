
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
          <h1>List Mahasiswa</h1>
        </div>
        <div class="col-2">
          <!-- Button trigger modal -->
          <a class="btn btn-primary" href="{{ url('/api/inputdata') }}">Tambah data</a>
        </div>
        <table class="table">
          <tr>
            <th>Id</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Usia</th>
            <th>Jurusan</th>
            <th>Alamat</th>
            <th>Aksi</th>
          </tr>
          @foreach ($data_api['data'] as $data) <!--untuk looping sebanyak data-->
          <tr>
            <td>{{$data['id']}}</td>
            <td>{{$data['nama']}}</td>
            <td>{{$data['nim']}}</td>
            <td>{{$data['usia']}}</td>
            <td>{{$data['jurusan']}}</td>
            <td>{{$data['alamat']}}</td>
            
          </tr>
          @endforeach <!--mengakhiri looping-->
        </table>
      </div>
    </div>

    <!-- <script>
    $(document).ready(function() {
      $.ajax({
                type: "GET",
                url: "http://localhost:8001/api/v1/posts",
                dataType: "json",
                data: data,
                success: function(data){
                  console.log(data.data[0].id);
                  $data = data;  
                }
      });
    });
    </script> -->

@endsection
