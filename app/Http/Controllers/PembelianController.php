<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PembelianController extends Controller
{
    public function create()
    {
        return view('create_pembelian');
    }
}
