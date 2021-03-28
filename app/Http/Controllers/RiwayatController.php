<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;

class RiwayatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_riwayat = \App\Models\Riwayat::all();
        $v_riwayatpembayaran = \App\Models\Riwayat::all();
        $metode = \App\Models\Metode::all();
        if (Gate::allows('admin')){
            return view('admin.riwayat-pembayaran.index', compact('data_riwayat', 'v_riwayatpembayaran', 'metode'));
        } else { 
            return abort(404);
        }
    }
    
    public function riwayat()
    {
        $data = \App\Models\Pembayaran::all();
        return view('pelanggan.riwayat-pembayaran.index', compact('data'));
    }

    public function riwayatPdf()
    {
        $data = \App\Models\Pembayaran::all();
        $pdf = PDF::loadView('pelanggan.riwayat-pembayaran.pdf', compact('data'))->setPaper('a4', 'potrait');
        return $pdf->stream();
    }
    
    public function riwayatpembayaran()
    {
        $metode = \App\Models\Metode::all();
        $v_riwayatpembayaran = \App\Models\Riwayat::all();
        return view('bank.riwayat-pembayaran.index', compact('v_riwayatpembayaran', 'metode'));
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
    }
}
