<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Support\Facades\Gate;

class LaporanController extends Controller
{
    public function index()
    {
        $data = \App\Models\Pembayaran::all();
        $v_riwayatpembayaran = \App\Models\Riwayat::all();
        $metode = \App\Models\Metode::all();
        if (Gate::allows('admin')){
            // dd($data);
            return view('admin.laporan.index', compact('data', 'v_riwayatpembayaran', 'metode'));
        } else { 
            return abort(404);
        }
    }

    public function riwayatPdf()
    {
        $data = \App\Models\Pembayaran::all();
        $pdf = PDF::loadView('admin.laporan.pdf', compact('data'))->setPaper('a4', 'potrait');
        return $pdf->stream();
    }
    
    public function riwayatpembayaran()
    {
        $metode = \App\Models\Metode::all();
        $v_riwayatpembayaran = \App\Models\Riwayat::all();
        return view('bank.riwayat-pembayaran.index', compact('v_riwayatpembayaran', 'metode'));
    }
}
