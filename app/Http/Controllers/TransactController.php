<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TransaksiBarangSementara as BarangSementara;
use App\TransaksiMasuk;
use Auth;
class TransactController extends Controller
{
    //
    public function saveTransaksiBarangMasuk(Request $request){
    	$count = $request->all()['jumlah']['parent'];




		$data = BarangSementara::where(['user'=>Auth::id(),'status'=>0])->get();

		$n=0;
		$kode = $request->data['kode'];
		$supplier = $request->data['supplier'];

		// echo count($data);
		foreach ($data as $d) {
			// echo $d->;
			# code...
			// print_r($d);
			// echo $d->kode_barang."<br>";
			// echo $count[$n++];
			$kodeBarang = $d->kode_barang;
			$jumlah = $count[$n++];

			$transMasuk = new TransaksiMasuk;
			$transMasuk->user = Auth::id();
			$transMasuk->kode = $kode;
			$transMasuk->kode_barang = $kodeBarang;
			$transMasuk->jumlah_masuk = $jumlah;
			$transMasuk->supplier = $supplier;
			$save = $transMasuk->save();


			BarangSementara::where('kode_barang',$kodeBarang)->update(['status'=>1,'user'=>Auth::id()]);


		}


    }

    public function TransaksiMasuk(){
    	$data = TransaksiMasuk::groupBy('kode_barang')->get();

    	return $data;
    }
}
