<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\MasterBarang;

class MasterController extends Controller
{
    public function create()
    {
        return view('create_master');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'kode_barang' => 'required',
            'nama_barang' => 'required',
            'qty' => 'required|numeric|between:0,99.99',
            'harga' => 'required'
        ]);

        $md = MasterBarang::create([
            'kode_barang' => $request->kode_barang,
            'nama_barang' => $request->nama_barang,
            'qty' => $request->qty,
            'harga' => $request->harga
        ]);

        if($md) {
            return redirect()->route('home')->with(['success' => 'Data Berhasil Disimpan!']);
        } else {
            return redirect()->route('master.create')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    public function edit($kode)
    {
        $master_barang = DB::table('master_barang')->where('kode_barang',$kode)->first();

	    return view('edit_master',['master_barang' => $master_barang]);
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'kode_barang' => 'required',
            'nama_barang' => 'required',
            'qty' => 'required|numeric|between:0,99.99',
            'harga' => 'required'
        ]);

        DB::table('master_barang')->where('kode_barang',$request->kode_barang)->update([
            'kode_barang' => $request->kode_barang,
            'nama_barang' => $request->nama_barang,
            'qty' => $request->qty,
            'harga' => $request->harga
        ]);

        return redirect()->route('home')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function delete($kode_barang)
    {
        DB::table('master_barang')->where('kode_barang',$kode_barang)->delete();
            
        return redirect()->route('home')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
