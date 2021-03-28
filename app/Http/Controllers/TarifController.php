<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use Alert;
use Illuminate\Auth\Events\Validated;

class TarifController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_tarif = \App\Models\Tarif::all();

        if (Gate::allows('admin')){
            return view('admin.tarif.index', compact('data_tarif'));
        } elseif (Gate::allows('pelanggan')){
            return view('pelanggan.tarif.index', compact('data_tarif'));
        } else { 
            return abort(404);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
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

        $tarif = \App\Models\Tarif::create($request->all());
        return redirect('/tarif')->with('success', 'Tambah data berhasil');
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
        $tarif = \App\Models\Tarif::find($id);
        return view('admin.tarif.edit', compact('tarif'));
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
        $tarif = \App\Models\Tarif::find($id);
        $tarif->update($request->all());
        return redirect('/tarif')->with('success', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tarif = \App\Models\Tarif::find($id);
        $tarif->delete();
        return redirect('/tarif')->with('success', 'Data berhasil dihapus');
    }
}
