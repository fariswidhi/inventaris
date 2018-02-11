<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBarangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {


// Barang
// kode barang auto
// nama
// spesifikasi
// lokasi
// kategori
// jumlah barang
        Schema::create('barangs', function (Blueprint $table) {
            $table->string('kode_barang');
            $table->string('nama');
            $table->string('spesifikasi');
            $table->string('lokasi');
            $table->string('kategori');
            $table->integer('jumlah');

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
        Schema::dropIfExists('barangs');
    }
}
