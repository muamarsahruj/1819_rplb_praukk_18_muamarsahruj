<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    //
    protected $table        = 'pembayaran';
    protected $fillable     = ['tagihan_id','pelanggan_id', 'metode_id', 'tgl_pembayaran','bulan_bayar', 'tahun_bayar', 'biaya_admin', 'total_bayar', 'status','bukti_transaksi'];

    public function pelanggan()
    {
        return $this->belongsTo('App\Models\Pelanggan');
    }

    public function tagihan()
    {
        return $this->belongsTo('App\Models\Tagihan');
    }

    public function metode()
    {
        return $this->belongsTo('App\Models\Metode');
    }
}
