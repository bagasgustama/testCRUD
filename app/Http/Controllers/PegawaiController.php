<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    public function index()
    {
        $data_pegawai = \App\Models\Pegawai::all(); 
        //untuk mengambil isi database
        // echo $data_pegawai;
        return view('pegawai.index',['data_pegawai' => $data_pegawai]);
        //untuk menampilkan isi database ke view
    }

    public function inputdata()
    {
        $data_pegawai = \App\Models\Pegawai::all(); 
        //untuk mengambil isi database
        return view('pegawai.inputdata',['data_pegawai' => $data_pegawai]);
        //untuk menampilkan isi database ke view
    }

    public function create(Request $request)
    {
        \App\Models\Pegawai::create($request->all());
        return redirect('/pegawai')->with('sukses','Data berhasil diinput');
    }

    public function edit($id)
    {
        $pegawai = \App\Models\Pegawai::find($id);
        return view('/pegawai/edit',['pegawai' => $pegawai]);
    }

    public function update(Request $request,$id)
    {
        $pegawai = \App\Models\Pegawai::find($id);
        $pegawai->update($request->all());
        return redirect('/pegawai')->with('sukses','Data berhasil diupdate');
    }

    public function delete($id)
    {
        $pegawai = \App\Models\Pegawai::find($id);
        $pegawai->delete();
        return redirect('/pegawai')->with('sukses','Data berhasil dihapus');
    }
}
