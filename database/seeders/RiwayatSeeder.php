<?php

namespace Database\Seeders;

use App\Models\RiwayatPenghuniRumah;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RiwayatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        RiwayatPenghuniRumah::insert([
            ['id_rumah' => '1', 'id_penghuni' => '1', 'tanggal_masuk' => '2025-01-29', 'tanggal_keluar' => null, 'created_at' => now(), 'updated_at' => now()],
            ['id_rumah' => '1', 'id_penghuni' => '3', 'tanggal_masuk' => '2024-08-13', 'tanggal_keluar' => '2025-01-25', 'created_at' => now(), 'updated_at' => now()],
            ['id_rumah' => '1', 'id_penghuni' => '5', 'tanggal_masuk' => '2024-03-01', 'tanggal_keluar' => '2024-04-03', 'created_at' => now(), 'updated_at' => now()],
            ['id_rumah' => '2', 'id_penghuni' => '2', 'tanggal_masuk' => '2025-01-29', 'tanggal_keluar' => null, 'created_at' => now(), 'updated_at' => now()],
            ['id_rumah' => '2', 'id_penghuni' => '7', 'tanggal_masuk' => '2024-08-13', 'tanggal_keluar' => '2025-01-25', 'created_at' => now(), 'updated_at' => now()],
            ['id_rumah' => '2', 'id_penghuni' => '8', 'tanggal_masuk' => '2024-03-01', 'tanggal_keluar' => '2024-04-03', 'created_at' => now(), 'updated_at' => now()],
            ['id_rumah' => '3', 'id_penghuni' => '6', 'tanggal_masuk' => '2025-01-29', 'tanggal_keluar' => null, 'created_at' => now(), 'updated_at' => now()],

            ['id_rumah' => '3', 'id_penghuni' => '10', 'tanggal_masuk' => '2024-08-13', 'tanggal_keluar' => '2025-01-25', 'created_at' => now(), 'updated_at' => now()],
            ['id_rumah' => '3', 'id_penghuni' => '13', 'tanggal_masuk' => '2024-03-01', 'tanggal_keluar' => '2024-04-03', 'created_at' => now(), 'updated_at' => now()],

            ['id_rumah' => '5', 'id_penghuni' => '5', 'tanggal_masuk' => '2025-01-29', 'tanggal_keluar' => null, 'created_at' => now(), 'updated_at' => now()],
            ['id_rumah' => '6', 'id_penghuni' => '6', 'tanggal_masuk' => '2025-01-29', 'tanggal_keluar' => null, 'created_at' => now(), 'updated_at' => now()],

            ['id_rumah' => '6', 'id_penghuni' => '20', 'tanggal_masuk' => '2024-08-13', 'tanggal_keluar' => '2025-01-25', 'created_at' => now(), 'updated_at' => now()],


            ['id_rumah' => '7', 'id_penghuni' => '7', 'tanggal_masuk' => '2025-01-29', 'tanggal_keluar' => null, 'created_at' => now(), 'updated_at' => now()],
            ['id_rumah' => '9', 'id_penghuni' => '9', 'tanggal_masuk' => '2025-01-29', 'tanggal_keluar' => null, 'created_at' => now(), 'updated_at' => now()],
            ['id_rumah' => '10', 'id_penghuni' => '10', 'tanggal_masuk' => '2025-01-29', 'tanggal_keluar' => null, 'created_at' => now(), 'updated_at' => now()],
            ['id_rumah' => '12', 'id_penghuni' => '12', 'tanggal_masuk' => '2025-01-29', 'tanggal_keluar' => null, 'created_at' => now(), 'updated_at' => now()],
            ['id_rumah' => '13', 'id_penghuni' => '13', 'tanggal_masuk' => '2025-01-29', 'tanggal_keluar' => null, 'created_at' => now(), 'updated_at' => now()],
            ['id_rumah' => '14', 'id_penghuni' => '14', 'tanggal_masuk' => '2025-01-29', 'tanggal_keluar' => null, 'created_at' => now(), 'updated_at' => now()],
            ['id_rumah' => '15', 'id_penghuni' => '15', 'tanggal_masuk' => '2025-01-29', 'tanggal_keluar' => null, 'created_at' => now(), 'updated_at' => now()],
            ['id_rumah' => '16', 'id_penghuni' => '16', 'tanggal_masuk' => '2025-01-29', 'tanggal_keluar' => null, 'created_at' => now(), 'updated_at' => now()],
            ['id_rumah' => '17', 'id_penghuni' => '17', 'tanggal_masuk' => '2025-01-29', 'tanggal_keluar' => null, 'created_at' => now(), 'updated_at' => now()],
            ['id_rumah' => '18', 'id_penghuni' => '18', 'tanggal_masuk' => '2025-01-29', 'tanggal_keluar' => null, 'created_at' => now(), 'updated_at' => now()],
            ['id_rumah' => '19', 'id_penghuni' => '19', 'tanggal_masuk' => '2025-01-29', 'tanggal_keluar' => null, 'created_at' => now(), 'updated_at' => now()],
            ['id_rumah' => '20', 'id_penghuni' => '20', 'tanggal_masuk' => '2025-01-29', 'tanggal_keluar' => null, 'created_at' => now(), 'updated_at' => now()],
            ['id_rumah' => '21', 'id_penghuni' => '4', 'tanggal_masuk' => '2025-01-29', 'tanggal_keluar' => null, 'created_at' => now(), 'updated_at' => now()]
        ]);
    }
}
