<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PembelianController extends Controller
{
    public function index5()
    {
        $pembelian = DB::table('pembelian')->get();
    	return view('pembelian',['pembelian' => $pembelian]);
    }
    public function pembelian_full (Request $request)
    {
        DB::table('pembelian')-> insert ([
            'id_Pembeli'=>$request->id_pembeli,
            'id_Suplier'=>$request->id_suplier,
            'id_Barang'=>$request->id_Barang,
            'Total'=>$request->total,
        ]);
        return redirect('/pembelian');
    }
}