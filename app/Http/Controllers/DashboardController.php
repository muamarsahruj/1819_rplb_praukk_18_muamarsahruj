<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use App\Models\Pelanggan;
use App\Models\Pembayaran;
use App\Models\Penggunaan;
use App\Models\Riwayat;
use App\Models\Tagihan;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        // $pelanggan      = Pelanggan::count();
        // $pelanggan      = Pelanggan::all();
        // $penggunaan     = Penggunaan::count();
        // $penggunaan     = Penggunaan::all();
        // $tagihan        = Tagihan::count();
        // $tagihan        = Tagihan::all();
        // $pembayaran     = Pembayaran::count();

        $riwayat        = \App\Models\Riwayat::all();
        $riwayat        = Riwayat::all();
        if (Gate::allows('bank')) {
            return view('bank.dashboard.index', compact('riwayat'));
        } else {
            return abort(404);
        }
    }
}
