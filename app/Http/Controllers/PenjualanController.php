<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PenjualanController extends Controller
{
    public function index6()
    {
        $penjualan = DB::table('penjualan')->get();
    	return view('penjualan',['penjualan' => $penjualan]);
    }
    public function pembelian_full (Request $request)
    {
        DB::table('penjualan')-> insert ([
            'id_penjualan'=>$request->id_penjualan,
            'id_customer'=>$request->id_customer,
            'id_Barang'=>$request->id_Barang,
            'Total'=>$request->total,
        ]);
        return redirect('/penjualan');
    }
}