<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RiwayatPenghuniRumah extends Model
{
    use HasFactory;

    protected $table = 'riwayat_penghuni_rumah';

    protected $fillable = [
        'id_rumah',
        'id_penghuni',
        'tanggal_masuk',
        'tanggal_keluar'
    ];

    public function rumah()
    {
        return $this->belongsTo(Rumah::class, 'id_rumah');
    }

    public function penghuni()
    {
        return $this->belongsTo(Penghuni::class, 'id_penghuni');
    }
}
