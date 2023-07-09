<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PemasukanController extends Controller
{
    public function index8()
    {
        $pemasukan = DB::table('pemasukan')->get();
    	return view('pemasukan',['pemasukan' => $pemasukan]);
    }
    public function pemasukan_full (Request $request)
    {
        DB::table('pemasukan')-> insert ([
            'id_pemasukan'=>$request->id_pemasukan,
            'id_pegawai'=>$request->id_pegawai,
            'id_penjualan'=>$request->id_penjualan,
            'uang_masuk'=>$request->uang_masuk,
        ]);
        return redirect('/pemasukan');
    }
}