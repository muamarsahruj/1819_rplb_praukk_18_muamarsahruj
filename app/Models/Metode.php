<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Metode extends Model
{
    protected $table = 'metode_pembayaran';
    protected $fillable = ['nama_metode', 'rekening', 'logo_bank'];

    public function v_riwayatpembayaran()
    {
        return $this->hasMany(App\Models\Riwayatpembayaran::class);
    }

    public function pembayaran()
    {
        return $this->hasMany(App\Models\Pembayaran::class);
    }
}
