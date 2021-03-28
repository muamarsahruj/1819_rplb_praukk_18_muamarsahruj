<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tagihan extends Model
{
    protected $table        = 'tagihan';
    protected $fillable     = ['pelanggan_id', 'penggunaan_id', 'bulan', 'tahun', 'jumlah_meter', 'jumlah_bayar', 'status'];

    public function pelanggan()
    {
        return $this->belongsTo('App\Models\Pelanggan');
    }

    public function penggunaan()
    {
        return $this->belongsTo('App\Models\Penggunaan');
    }

    public function pembayaran()
    {
        return $this->hasOne('App\Models\Pembayaran');
    }

    public function riwayat()
    {
        return $this->belongsTo('App\Models\Penggunaan');
    }
}
