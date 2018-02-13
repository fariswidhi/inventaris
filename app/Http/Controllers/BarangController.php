<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barang;
use App\TransaksiBarangSementara as BarangSementara;
use Auth;
// Barang
// kode barang auto
// nama
// spesifikasi
// lokasi
// kategori
// jumlah barang

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Barang::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // $save = Barang::create($request->all());
        $save = new Barang;
        $save->kode_barang = $request->kode_barang;
        $save->nama = $request->nama;
        $save->spesifikasi = $request->spesifikasi;
        $save->lokasi = $request->lokasi;
        $save->kategori = $request->kategori;
        $save->jumlah = $request->jumlah;
        $save->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        return Barang::find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $save = Barang::find($id);
        $save->kode_barang = $request->kode_barang;
        $save->nama = $request->nama;
        $save->spesifikasi = $request->spesifikasi;
        $save->lokasi = $request->lokasi;
        $save->kategori = $request->kategori;
        $save->jumlah = $request->jumlah;
        $save->update();

        if ($save) {
            return response(200);
        }
        else{
            return response(500);
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $barang = Barang::find($id)->delete();
        if ($barang) {
            return response(200);
        }
        else{
            return response(500);
        }


    }

    public function saveBarangSementara(Request $request){
        $id = $request->id;
        $barang = new BarangSementara;
        $barang->kode_barang = $id;
        $barang->user = Auth::id();
        $barang->status=0;
        $save = $barang->save();
        if ($save) {
            return response(200);
        }
        else{
            return response(500);
        }
    }
    public function deleteBarangSementara(Request $request){
        $id = $request->id;
        $barang = BarangSementara::find($id);
        $delete = $barang->delete();
        if ($delete) {
            return response(200);
        }
        else{
            return response(500);
        }
    }

    public function barangSementara(){
        $data = BarangSementara::where(['user'=>Auth::id(),'status'=>0])->get();
        return response($data);

        // echo json_encode($data);

    }

}


