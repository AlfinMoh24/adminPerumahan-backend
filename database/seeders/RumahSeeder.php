<?php

namespace Database\Seeders;

use App\Models\rumah;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RumahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Rumah::insert([
                ['kode_rumah' => 'A1', 'status_rumah' => 'Dihuni', 'id_penghuni' => 1, 'created_at' => now(), 'updated_at' => now()],
                ['kode_rumah' => 'A2', 'status_rumah' => 'Dihuni', 'id_penghuni' => 2, 'created_at' => now(), 'updated_at' => now()],
                ['kode_rumah' => 'A3', 'status_rumah' => 'Dihuni', 'id_penghuni' => 3, 'created_at' => now(), 'updated_at' => now()],
                ['kode_rumah' => 'A4', 'status_rumah' => 'Tidak dihuni', 'id_penghuni' => null, 'created_at' => now(), 'updated_at' => now()],
                ['kode_rumah' => 'A5', 'status_rumah' => 'Dihuni', 'id_penghuni' => 5, 'created_at' => now(), 'updated_at' => now()],
                ['kode_rumah' => 'B1', 'status_rumah' => 'Dihuni', 'id_penghuni' => 6, 'created_at' => now(), 'updated_at' => now()],
                ['kode_rumah' => 'B2', 'status_rumah' => 'Dihuni', 'id_penghuni' => 7, 'created_at' => now(), 'updated_at' => now()],
                ['kode_rumah' => 'B3', 'status_rumah' => 'Tidak dihuni', 'id_penghuni' => null, 'created_at' => now(), 'updated_at' => now()],
                ['kode_rumah' => 'B4', 'status_rumah' => 'Dihuni', 'id_penghuni' => 9, 'created_at' => now(), 'updated_at' => now()],
                ['kode_rumah' => 'B5', 'status_rumah' => 'Dihuni', 'id_penghuni' => 10, 'created_at' => now(), 'updated_at' => now()],
                ['kode_rumah' => 'C1', 'status_rumah' => 'Tidak dihuni', 'id_penghuni' => null, 'created_at' => now(), 'updated_at' => now()],
                ['kode_rumah' => 'C2', 'status_rumah' => 'Dihuni', 'id_penghuni' => 12, 'created_at' => now(), 'updated_at' => now()],
                ['kode_rumah' => 'C3', 'status_rumah' => 'Dihuni', 'id_penghuni' => 13, 'created_at' => now(), 'updated_at' => now()],
                ['kode_rumah' => 'C4', 'status_rumah' => 'Dihuni', 'id_penghuni' => 14, 'created_at' => now(), 'updated_at' => now()],
                ['kode_rumah' => 'C5', 'status_rumah' => 'Dihuni', 'id_penghuni' => 15, 'created_at' => now(), 'updated_at' => now()],
                ['kode_rumah' => 'D1', 'status_rumah' => 'Dihuni', 'id_penghuni' => 16, 'created_at' => now(), 'updated_at' => now()],
                ['kode_rumah' => 'D2', 'status_rumah' => 'Dihuni', 'id_penghuni' => 17, 'created_at' => now(), 'updated_at' => now()],
                ['kode_rumah' => 'D3', 'status_rumah' => 'Dihuni', 'id_penghuni' => 18, 'created_at' => now(), 'updated_at' => now()],
                ['kode_rumah' => 'D4', 'status_rumah' => 'Dihuni', 'id_penghuni' => 19, 'created_at' => now(), 'updated_at' => now()],
                ['kode_rumah' => 'D5', 'status_rumah' => 'Dihuni', 'id_penghuni' => 20, 'created_at' => now(), 'updated_at' => now()],
                ['kode_rumah' => 'E1', 'status_rumah' => 'Dihuni', 'id_penghuni' => 4, 'created_at' => now(), 'updated_at' => now()],
                ['kode_rumah' => 'E2', 'status_rumah' => 'Tidak dihuni', 'id_penghuni' => 8, 'created_at' => now(), 'updated_at' => now()],
                ['kode_rumah' => 'E3', 'status_rumah' => 'Tidak dihuni', 'id_penghuni' => 11, 'created_at' => now(), 'updated_at' => now()],

        ]);
    }
}
