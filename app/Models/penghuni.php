<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class penghuni extends Model
{
    //use HasFactory;

    protected $table = 'penghuni';
    protected $fillable = [
        'nama_lengkap', 'foto_ktp', 'nomor_telepon', 'status_perkawinan', 'status_penghuni'
    ];
}
