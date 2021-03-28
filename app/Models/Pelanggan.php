<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    protected $table        = 'pelanggan';
    protected $fillable     = ['username', 'tarif_id', 'password', 'no_meter', 'nama_pelanggan', 'alamat'];

    public function tarif()
    {
        return $this->belongsTo('App\Models\Tarif');
    }

    public function penggunaan()
    {
        return $this->hasOne('App\Models\Penggunaan');
    }
    
    public function tagihan()
    {
        return $this->hasMany('App\Models\Tagihan');
    }

    public function pembayaran()
    {
        return $this->hasMany('App\Models\Pembayaran');
    }

    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = bcrypt($password);
    }
}