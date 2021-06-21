<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PembelianBarang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembelian_barang', function (Blueprint $table) {
            $table->id();
            $table->string('nomor_pembelian');
            $table->string('tanggal');
            $table->string('kode_barang');
            $table->string('satuan');
            $table->bigInteger('qty');
            $table->bigInteger('harga');
            $table->bigInteger('diskon');
            $table->bigInteger('sub_total');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('pembelian_barang');
    }
}
