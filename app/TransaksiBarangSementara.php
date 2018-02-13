<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TransaksiBarangSementara extends Model
{
    //

    public function barang(){
    	return $this->belongsTo('App\Barang','kode_barang');
    }
}
