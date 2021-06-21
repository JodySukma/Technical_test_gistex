<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PembelianBarang extends Model
{
    protected $table = "pembelian_barang";

    protected $fillable = [
        'nomor_pembelian', 
        'tanggal', 
        'kode_barang', 
        'satuan', 
        'qty',
        'harga',
        'diskon',
        'sub_total',
    ];

    public function master(){ 
        return $this->belongsTo('App\MasterBarang'); 
  }
}
