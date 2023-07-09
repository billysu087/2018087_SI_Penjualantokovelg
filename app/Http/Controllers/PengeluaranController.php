<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PengeluaranController extends Controller
{
    public function index7()
    {
        $pengeluaran = DB::table('pengeluaran')->get();
    	return view('pengeluaran',['pengeluaran' => $pengeluaran]);
    }
    public function pengeluaran_full (Request $request)
    {
        DB::table('pengeluaran')-> insert ([
            'id_pengeluaran'=>$request->id_pengeluaran,
            'id_pegawai'=>$request->id_pegawai,
            'id_pembelian'=>$request->id_pembelian,
            'pembayaran'=>$request->pembayaran,
        ]);
        return redirect('/pengeluaran');
    }
}