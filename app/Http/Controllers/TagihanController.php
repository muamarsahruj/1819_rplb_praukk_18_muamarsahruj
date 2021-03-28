<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use App\Models\Tagihan;
use Illuminate\Http\Request;

class TagihanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_tagihan   = \App\Models\Tagihan::all();
        $data           = \App\Models\Pembayaran::all();
        return view('admin.tagihan.index', compact('data_tagihan', 'data'));
    }
   
    public function tagihan_pelanggan()
    {
        $data_tagihan = \App\Models\Tagihan::all();
        return view('pelanggan.tagihan.index', compact('data_tagihan'));
    }
    
    public function tagihan_check(Request $request)
    {
        $pelanggan = Pelanggan::where('no_meter', $request->meter)->get()->first();
        if ($pelanggan == false) {
            return back();
        } else {
            $id_pelanggan = $pelanggan['id'];
            $detail_pelanggan = Tagihan::where('pelanggan_id', $id_pelanggan)->get()->first();
            $detail_tagihan = Tagihan::where('pelanggan_id', $id_pelanggan)->get();
            
            if ($detail_pelanggan->status == "sudah bayar") {
                return back();
            } else {
                return view('pelanggan.tagihan.index', compact('pelanggan', 'detail_pelanggan', 'detail_tagihan'));
            }
            
        }
        
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
