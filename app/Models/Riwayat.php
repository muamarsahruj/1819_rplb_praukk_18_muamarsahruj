<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Riwayat extends Model
{
    protected $table        = 'v_riwayat_pembayaran';

    public function metode()
    {
        return $this->belongsTo(\App\Models\Metode::class);
    }

    public function tagihan()
    {
        return $this->hasOne('App\Models\Tagihan');
    }
}

