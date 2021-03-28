<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_pelanggan = \App\Models\Pelanggan::all();
        $tarif = \App\Models\Tarif::all();
        return view('admin.pelanggan.index', compact('data_pelanggan', 'tarif'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        \App\Models\Pelanggan::create($request->all());
        return redirect('/pelanggan')->with('success', 'Tambah data berhasil');
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
        $pelanggan = \App\Models\Pelanggan::find($id);
        $tarif = \App\Models\Tarif::all();
        return view('admin.pelanggan.edit', compact('pelanggan', 'tarif'));
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
        $pelanggan = \App\Models\Pelanggan::find($id);
        $pelanggan->update($request->all());
        return redirect('/pelanggan')->with('success', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pelanggan = \App\Models\Pelanggan::find($id);
        $pelanggan->delete();
        return redirect('/pelanggan')->with('success', 'Data berhasil dihapus');
    }
}
