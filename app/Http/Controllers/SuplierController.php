<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SuplierController extends Controller
{
    public function index4()
    {
        $suplier = DB::table('suplier')->get();
        return view('suplier', ['suplier' => $suplier]);
    }
    public function updateProcess(Request $request)
    {
        DB::table('suplier')->insert([
            'id_suplier' => $request->id_suplier,
            'nama_suplier' => $request->nama_suplier,
            'no_telp' => $request->no_telp,
            'perusahaan' => $request->perusahaan,
        ]);
        return redirect('/suplier');
    }
    public function suplier_tambah()
    {
        return view('/suplier-tambah');
    }
}
