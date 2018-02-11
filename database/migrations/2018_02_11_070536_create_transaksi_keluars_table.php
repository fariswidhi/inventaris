<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransaksiKeluarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

// Transaksi Keluar barang
// kode 
// id barang
// jumlah keluar
// tanggal keluar
// keperluan
    public function up()
    {
        Schema::create('transaksi_keluars', function (Blueprint $table) {
            $table->string('kode');
            $table->string('kode_barang');
            $table->integer('jumlah_keluar');
            $table->string('tanggal_keluar');
            $table->text('keperluan');
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
        Schema::dropIfExists('transaksi_keluars');
    }
}
