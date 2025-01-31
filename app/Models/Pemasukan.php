<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemasukan extends Model
{
    use HasFactory;

    protected $table = 'pemasukan'; // Nama tabel

    protected $fillable = [
        'jenis_pemasukan',
        'jumlah',
        'tanggal',
    ];

    protected $casts = [
        'tanggal' => 'date', // Format tanggal otomatis
        'jumlah' => 'decimal:2', // Menjaga format dua desimal
    ];
}
