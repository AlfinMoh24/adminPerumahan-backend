<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    use HasFactory;

    // Menentukan kolom yang dapat diisi
    protected $table = 'pembayaran';
    protected $fillable = [
        'id_penghuni',
        'jenis_pembayaran',
        'periode_pembayaran',
        'jumlah',
        'tanggal',
        'status_pembayaran',
        'id_rumah',  // Menambahkan kolom id_rumah
    ];


    public function penghuni()
    {
        return $this->belongsTo(Penghuni::class, 'id_penghuni');
    }


    public function rumah()
    {
        return $this->belongsTo(Rumah::class, 'id_rumah');
    }

    public static function tentukanJumlah($jenis, $periode)
    {
        $hargaBulanan = match ($jenis) {
            'Satpam' => 100000,
            'Kebersihan' => 15000,
            default => 0
        };

        return $periode === 'Tahunan' ? $hargaBulanan * 12 : $hargaBulanan;
    }

    public static function scopeTotalPemasukan($query, $startDate, $endDate)
    {
        return $query->whereBetween('tanggal', [$startDate, $endDate])
            ->sum('jumlah');
    }
    
}
