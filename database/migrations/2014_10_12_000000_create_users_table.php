<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->integer('level');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}



// Penerimaan Barang dari supplier
// Tambah Transaksi Masuk Barang
// Tambahkan Barang satu satu lewat modal dialog
// Simpan barang otomatis update/insert ke tabel stok

// Peminjaman Barang
// Cari Barang yang dipinjam
// Simpan barang otomatis update/insert ke tabel stok

// Pengeluaran Barang
// Cari Barang yang dikeluarkan
// Simpan barang otomatis update/insert ke tabel stok


// Supplier 
// kode supplier auto
// nama suplier 
// alamat

// User 
// id 
// nama
// password
// role

// Barang
// kode barang auto
// nama
// spesifikasi
// lokasi
// kategori
// jumlah barang


// Transaksi Masuk Barang
// kode 
// id barang
// tanggal masuk
// jumlah masuk
// suplier 

// Transaksi pinjam Barang
// no pinjam
// tanggal pinjam
// tanggal kembali
// peminjam
// id barang
// jumlah pinjam
// keterangan


// Transaksi Keluar barang
// kode 
// id barang
// jumlah keluar
// tanggal keluar
// keperluan


// Transaksi keluar masuk barang
// kode barang
// jml keluar
// jml masuk
// total barang
// keterangan
// tanggal
