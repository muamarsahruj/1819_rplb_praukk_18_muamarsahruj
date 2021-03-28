<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tarif extends Model
{
    protected $table        = 'tarif';
    protected $fillable     = ['daya', 'tarif_perkwh'];

    public function pelanggan()
    {
        return $this->hasMany('App\Models\Pelanggan');
    }

    public function penggunaan()
    {
        return $this->hasOne('App\Models\Penggunaan');
    }
}
