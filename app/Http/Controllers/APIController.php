<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
// use App\Http\Controllers\Http;
use Illuminate\Support\Facades\Http;

class APIController extends Controller
{
  public function index()
    {
      
      $response = http::get('http://localhost:8087/api/v1.php?table=listmahasiswa&action=list');
      $data_api = $response->json();
      // echo $response;
      // echo json_decode($data_api);
      // return http::get('http://localhost:8087/api/v1.php?table=listmahasiswa&action=list');
      return view('/api/index',['data_api' => $data_api]);
    }

    public function inputdata()
    {
        $response = http::get('http://localhost:8087/api/v1.php?table=listmahasiswa&action=list');
        //untuk mengambil isi database
        $data_api = $response->json();
        return view('api.inputdata',['data_api' => $data_api]);
        //untuk menampilkan isi database ke view
    }

    public function create(Request $request)
    {
      $response = http::post('http://localhost:8087/api/v1.php?table=listmahasiswa&action=add');
      $response::create($request->all());
        return redirect('/api')->with('sukses','Data berhasil diinput');
    }
}