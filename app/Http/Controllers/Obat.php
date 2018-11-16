<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Obat extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = ModelObat::all();
		return view('Obat',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('obat_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new ModelObat();
		$data->nama obat = $request->nama_obat;
		$data->harga = $request->hargaa;
		$data->stok = $request->stok;
		$data->expired_date = $request->expired_date;
		$data->production_date = $request->production_date;
		$data->save();
		return redirect()->route('obat.index')->with('alert-success','Berhasil Menambahkan Data!');
 
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
         $data =ModelObat::where('id',$id)->get();
		return view('edit_obat',compact('data'));
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
         $data = ModelObat::where ('id',$id)->first();
		$data->nama_obat = $request->nama_obat;
		$data->harga = $request->harga;
		$data->stok = $request->stok;
		$data->expired_date = $request->expired_date;
		$data->production_date = $request->production_date;
		$data->save();
		return redirect()->route('Obat.index')->with(
		'alert-success','Data berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $data = ModelObat::where ('id',$id)->first();
		$data->delete();
		return redirect()->route('Obat.index')->with(
		'alert-success','Data berhasil di hapus!');
    }
}
