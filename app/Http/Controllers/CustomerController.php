<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    public function index2()
    {
        $customer = DB::table('customer')->get();
        return view('customer', ['customer' => $customer]);
    }
    public function updateProcess(Request $request)
    {
        DB::table('customer')->insert([
            'id_customer' => $request->id_customer,
            'nama_customer' => $request->nama_customer,
            'alamat' => $request->alamat,
            'no_telp' => $request->no_telp,
        ]);
        return redirect('/customer');
    }
    public function customer_tambah()
    {
        return view('customer-tambah');
    }
}
