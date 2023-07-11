<?php

namespace App\Http\Controllers;

use App\Penduduk;
use Illuminate\Http\Request;

class PendudukController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'propinsi_id' => 'required',
            'kota_id' => 'required',
            'tgl_lahir' => 'required|date',
            // include other fields here as necessary, e.g.,
            // 'nik' => 'required',
            // 'nama' => 'required',
            // 'jenis_kelamin' => 'required',
        ]);
        
    $penduduk = new Penduduk();
    $penduduk->nik = $request->input('nik');
    $penduduk->nama = $request->input('nama');
    $penduduk->jenis_kelamin = $request->input('jenis_kelamin');
    $penduduk->tgl_lahir = $request->input('tgl_lahir');
    $penduduk->umur_bulan = $request->input('umur_bulan');
    $penduduk->propinsi_id = $request->input('propinsi_id');
    $penduduk->kota_id = $request->input('kota_id');
    $penduduk->alamat_pasien = $request->input('alamat_pasien');
    
    $penduduk->save();

    return redirect('/dashboard');
    }

    public function index()
    {
        $data = Penduduk::all();
        
        return view("dashboard", ["data"=>$data]);
    }
}
