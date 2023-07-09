<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PegawaiController extends Controller
{
    public function index()
    {
        $pegawai = DB::table('pegawai')->get();
        return view('pegawai', ['pegawai' => $pegawai]);
    }
    public function updateProcess(Request $request)
    {
        DB::table('pegawai')->insert([
            'id_pegawai' => $request->id_pegawai,
            'nama_pegawai' => $request->nama_pegawai,
            'alamat' => $request->alamat,
            'no_telp' => $request->no_telp,
        ]);
        return redirect('/pegawai');
    }
    public function pegawai_tambah()
    {
        return view('pegawai-tambah');
    }
}
