<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PenggunaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = \App\Models\Penggunaan::max('id') + 1;
        $data_penggunaan = \App\Models\Penggunaan::all();
        $pelanggan = \App\Models\Pelanggan::all();
        return view('admin.penggunaan.index', compact('data_penggunaan', 'pelanggan', 'id'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        // \App\Models\Penggunaan::create($request->all());
        $data_penggunaan = [
            'id' => $request->id,
            'pelanggan_id' => $request->pelanggan_id,
            'bulan' => $request->bulan,
            'tahun' => $request->tahun,
            'meter_awal' => $request->meter_awal,
            'meter_akhir' => $request->meter_akhir
        ];

        $jumlah_meter = $request->meter_akhir - $request->meter_awal;

        $tarif = \App\Models\Pelanggan::find($request->pelanggan_id)->tarif_id;
        $tarif_perkwh = \App\Models\Tarif::find($tarif)->tarif_perkwh;

        $jumlah_bayar = $jumlah_meter * $tarif_perkwh;

        $data_tagihan = [
            'pelanggan_id' => $request->pelanggan_id,
            'penggunaan_id' => $request->id,
            'bulan' => $request->bulan,
            'tahun' => $request->tahun,
            'jumlah_meter' => $jumlah_meter,
            'jumlah_bayar' => $jumlah_bayar,
            'status' => 'belum bayar',
        ];


        \App\Models\Penggunaan::create($data_penggunaan);
        \App\Models\Tagihan::create($data_tagihan);

        return redirect('/penggunaan')->with('success', 'Tambah data berhasil');
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
        $penggunaan = \App\Models\Penggunaan::find($id);
        $pelanggan = \App\Models\Pelanggan::all();
        $tarif = \App\Models\Tarif::all();
        return view('admin.penggunaan.edit', compact('penggunaan', 'pelanggan', 'tarif'));
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
        $penggunaan = \App\Models\Penggunaan::find($id);
        $penggunaan->update($request->all());
        return redirect('/penggunaan')->with('success', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $penggunaan = \App\Models\Penggunaan::find($id);
        $penggunaan->delete();
        return redirect('/penggunaan')->with('success', 'Data berhasil dihapus');
    }
}
