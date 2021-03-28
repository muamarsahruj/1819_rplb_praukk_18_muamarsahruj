<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PembayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $data = \App\Models\Tagihan::find($id);
        $metode = \App\Models\Metode::all();
        return view('pelanggan.tagihan.detail-tagihan', compact('data','metode'));
    }
    
    public function bank()
    {
        $tagihan = \App\Models\Tagihan::all();
        $data_pembayaran = \App\Models\Pembayaran::all();
        return view('bank.data-pembayaran.index', compact('data_pembayaran', 'tagihan'));
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
        $bukti = $request->bukti_transaksi;
        $namaFile = $bukti->getClientOriginalName();        
        $data = [
            'tagihan_id'    => $request->tagihan_id,
            'pelanggan_id'  => $request->pelanggan_id,
            'metode_id'  => $request->metode,
            'tgl_pembayaran'  => date('Y-m-d h:i:s'),
            'bulan_bayar'   => $request->bulan_bayar,
            'tahun_bayar'   => $request->tahun_bayar,
            'biaya_admin'   => $request->biaya_admin,
            'total_bayar'   => $request->total_bayar,
            'status'        => 'sedang diproses',
            'bukti_transaksi' => $namaFile
        ];

        $bukti->move(public_path().'/upload',$namaFile);

        \App\Models\Pembayaran::create($data);
        return redirect('riwayat-pembayaran');
        
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
        $pembayaran = \App\Models\Pembayaran::find($id);
        return view('bank.data-pembayaran.verifikasi', compact('pembayaran'));
    }

    public function oneChange(Request $request, $id){
        DB::select("CALL update_status_pembayaran($id, '$request->status')");
        return redirect('/pembayaran');
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
