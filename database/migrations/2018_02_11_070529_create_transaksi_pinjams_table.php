<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransaksiPinjamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

// Transaksi pinjam Barang
// no pinjam
// tanggal pinjam
// tanggal kembali
// peminjam
// id barang
// jumlah pinjam
// keterangan

    public function up()
    {
        Schema::create('transaksi_pinjams', function (Blueprint $table) {
            $table->string('kode');
            $table->string('tanggal_pinjam');
            $table->string('tanggal_kembali');
            $table->string('peminjam');
            $table->string('kode_barang');
            $table->integer('jumlah_pinjam');
            $table->text('keterangan');
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
        Schema::dropIfExists('transaksi_pinjams');
    }
}
