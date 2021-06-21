<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MasterBarang extends Model
{
    protected $table = "master_barang";

    public $timestamps = false;

    protected $fillable = [
        'nama_barang', 
        'kode_barang', 
        'qty',
        'harga',
    ];

    public function pembelian(){
    	return $this->hasMany('App\PembelianBarang');
    }
}
