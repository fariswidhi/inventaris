<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransaksiMasuksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    // Transaksi Masuk Barang
// kode 
// id barang
// tanggal masuk
// jumlah masuk
// suplier 

    public function up()
    {
        Schema::create('transaksi_masuks', function (Blueprint $table) {
            $table->string('kode');
            $table->string('kode_barang');
            $table->integer('jumlah_masuk');
            $table->integer('supplier');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaksi_masuks');
    }
}
