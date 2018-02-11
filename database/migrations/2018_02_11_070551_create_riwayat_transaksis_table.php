<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRiwayatTransaksisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('riwayat_transaksis', function (Blueprint $table) {
            $table->string('kode_barang');
            $table->integer('jumlah_keluar');
            $table->integer('jumlah_masuk');
            $table->integer('total_barang');
            $table->text('keterangan');
            $table->timestamps();
        });
    }

// kode barang
// jml keluar
// jml masuk
// total barang
// keterangan
// tanggal

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('riwayat_transaksis');
    }
}
