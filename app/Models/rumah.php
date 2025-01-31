<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rumah extends Model
{
    use HasFactory;

    protected $table = 'rumah';

    protected $fillable = [
        'kode_rumah',
        'status_rumah',
        'id_penghuni',
    ];

    // Relasi dengan Penghuni
    public function penghuni()
    {
        return $this->belongsTo(Penghuni::class, 'id_penghuni');
    }

    // Setter untuk status rumah
    public function setStatus()
    {
        $this->status_rumah = $this->id_penghuni ? 'Dihuni' : 'Tidak dihuni';
        $this->save();
    }

    // Override setIdPenghuni agar otomatis mengubah status_rumah
    public function setIdPenghuniAttribute($value)
    {
        $this->attributes['id_penghuni'] = $value;
        $this->attributes['status_rumah'] = $value ? 'Dihuni' : 'Tidak dihuni';
    }

}
