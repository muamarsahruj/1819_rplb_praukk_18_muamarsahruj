<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Penggunaan extends Model
{

    protected $table        = 'penggunaan';
    protected $fillable     = ['id','pelanggan_id', 'tarif_id', 'bulan', 'tahun', 'meter_awal', 'meter_akhir'];
    
    public function tarif()
    {
        return $this->belongsTo('App\Models\Tarif');
    }
    
    public function pelanggan()
    {
        return $this->belongsTo('App\Models\Pelanggan');
    }

    public function tagihan()
    {
        return $this->hasOne('App\Models\Tagihan');
    }
}
