<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengeluaran extends Model
{
    use HasFactory;

    // Nama tabel yang digunakan oleh model
    protected $table = 'pengeluaran';

    // Kolom yang boleh diisi massal (mass assignment)
    protected $fillable = [
        'deskripsi',
        'jumlah',
        'tanggal',
    ];

    // Menentukan tipe data untuk tanggal agar otomatis diubah ke format Carbon
    protected $dates = [
        'tanggal',
    ];

    public static function scopeTotalPengeluaran($query, $startDate, $endDate)
{
    return $query->whereBetween('tanggal', [$startDate, $endDate])
                 ->sum('jumlah');
}

}
