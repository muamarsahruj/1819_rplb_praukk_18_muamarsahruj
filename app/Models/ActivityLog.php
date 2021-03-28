<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ActivityLog extends Model
{
    protected $table = 'activity_log';
    protected $fillable = ['nama_log', 'deskripsi', 'tabel', 'referensi_id', 'user_id'];
}
