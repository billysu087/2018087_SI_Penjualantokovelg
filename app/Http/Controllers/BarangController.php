<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BarangController extends Controller
{
    public function index3()
    {
        $barang = DB::table('barang')->get();
        return view('barang', ['barang' => $barang]);
    }
    public function updateProcess(Request $request)
    {
        DB::table('barang')->insert([
            'id_barang' => $request->id_barang,
            'id_pegawai' => $request->id_pegawai,
            'Merk' => $request->merk,
            'Harga' => $request->harga,
            'Masuk' => $request->masuk,
            'Keluar' => $request->keluar,
        ]);
        return redirect('/barang');
    }
    public function barang_tambah()
    {
        return view('/barang-tambah');
    }
    public function getData()
    {
        $data = DB::table('barang')->select('id_pegawai')->get();
        echo $data;
        return view('barang-tambah')->with('data', $data);
    }
}
