<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $pembelian_barang = DB::table('pembelian_barang')->get();
        $master_barang = DB::table('master_barang')->get();

        return view('home', [
            'pembelian_barang' => $pembelian_barang,
            'master_barang' => $master_barang
            ]);
    }
}
