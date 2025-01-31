<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pembayaran;

class PembayaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pembayaran::insert(
            [
                    ['id_penghuni' => '1', 'id_rumah' => '1', 'jenis_pembayaran' => 'Satpam', 'periode_pembayaran' => 'Bulanan', 'jumlah' => 100000, 'tanggal' => '2024-08-13', 'status_pembayaran' => 'Lunas', 'created_at' => now(), 'updated_at' => now()],
                    ['id_penghuni' => '1', 'id_rumah' => '1', 'jenis_pembayaran' => 'Kebersihan', 'periode_pembayaran' => 'Bulanan', 'jumlah' => 15000, 'tanggal' => '2024-08-13', 'status_pembayaran' => 'Lunas', 'created_at' => now(), 'updated_at' => now()],

                    ['id_penghuni' => '3', 'id_rumah' => '1', 'jenis_pembayaran' => 'Satpam', 'periode_pembayaran' => 'Bulanan', 'jumlah' => 100000, 'tanggal' => '2024-12-01', 'status_pembayaran' => 'Lunas', 'created_at' => now(), 'updated_at' => now()],
                    ['id_penghuni' => '3', 'id_rumah' => '1', 'jenis_pembayaran' => 'Kebersihan', 'periode_pembayaran' => 'Bulanan', 'jumlah' => 15000, 'tanggal' => '2024-12-01', 'status_pembayaran' => 'Lunas', 'created_at' => now(), 'updated_at' => now()],

                    ['id_penghuni' => '5', 'id_rumah' => '5', 'jenis_pembayaran' => 'Satpam', 'periode_pembayaran' => 'Bulanan', 'jumlah' => 100000, 'tanggal' => '2025-01-29', 'status_pembayaran' => 'Lunas', 'created_at' => now(), 'updated_at' => now()],
                    ['id_penghuni' => '5', 'id_rumah' => '5', 'jenis_pembayaran' => 'Kebersihan', 'periode_pembayaran' => 'Bulanan', 'jumlah' => 15000, 'tanggal' => '2025-01-29', 'status_pembayaran' => 'Lunas', 'created_at' => now(), 'updated_at' => now()],

                    ['id_penghuni' => '7', 'id_rumah' => '7', 'jenis_pembayaran' => 'Satpam', 'periode_pembayaran' => 'Bulanan', 'jumlah' => 100000, 'tanggal' => '2025-01-10', 'status_pembayaran' => 'Belum Dibayar', 'created_at' => now(), 'updated_at' => now()],
                    ['id_penghuni' => '7', 'id_rumah' => '7', 'jenis_pembayaran' => 'Kebersihan', 'periode_pembayaran' => 'Bulanan', 'jumlah' => 15000, 'tanggal' => '2025-01-10', 'status_pembayaran' => 'Belum Dibayar', 'created_at' => now(), 'updated_at' => now()],

                    ['id_penghuni' => '12', 'id_rumah' => '12', 'jenis_pembayaran' => 'Satpam', 'periode_pembayaran' => 'Bulanan', 'jumlah' => 100000, 'tanggal' => '2024-09-15', 'status_pembayaran' => 'Lunas', 'created_at' => now(), 'updated_at' => now()],
                    ['id_penghuni' => '12', 'id_rumah' => '12', 'jenis_pembayaran' => 'Kebersihan', 'periode_pembayaran' => 'Bulanan', 'jumlah' => 15000, 'tanggal' => '2024-09-15', 'status_pembayaran' => 'Lunas', 'created_at' => now(), 'updated_at' => now()],
                    ['id_penghuni' => '4', 'id_rumah' => '5', 'jenis_pembayaran' => 'Satpam', 'periode_pembayaran' => 'Bulanan', 'jumlah' => 100000, 'tanggal' => '2024-12-15', 'status_pembayaran' => 'Lunas', 'created_at' => now(), 'updated_at' => now(),],
                    ['id_penghuni' => '4', 'id_rumah' => '5', 'jenis_pembayaran' => 'Kebersihan', 'periode_pembayaran' => 'Bulanan', 'jumlah' => 15000, 'tanggal' => '2024-12-20', 'status_pembayaran' => 'Lunas', 'created_at' => now(), 'updated_at' => now(),],
                    ['id_penghuni' => '6', 'id_rumah' => '7', 'jenis_pembayaran' => 'Satpam', 'periode_pembayaran' => 'Bulanan', 'jumlah' => 100000, 'tanggal' => '2024-11-10', 'status_pembayaran' => 'Belum Dibayar', 'created_at' => now(), 'updated_at' => now(),],
                    ['id_penghuni' => '6', 'id_rumah' => '7', 'jenis_pembayaran' => 'Kebersihan', 'periode_pembayaran' => 'Bulanan', 'jumlah' => 15000, 'tanggal' => '2024-11-15', 'status_pembayaran' => 'Lunas', 'created_at' => now(), 'updated_at' => now(),],
                    ['id_penghuni' => '9', 'id_rumah' => '10', 'jenis_pembayaran' => 'Satpam', 'periode_pembayaran' => 'Bulanan', 'jumlah' => 100000, 'tanggal' => '2024-10-05', 'status_pembayaran' => 'Lunas', 'created_at' => now(), 'updated_at' => now(),],
                    ['id_penghuni' => '9', 'id_rumah' => '10', 'jenis_pembayaran' => 'Kebersihan', 'periode_pembayaran' => 'Bulanan', 'jumlah' => 15000, 'tanggal' => '2024-10-08', 'status_pembayaran' => 'Lunas', 'created_at' => now(), 'updated_at' => now(),]


            ]
        );
    }
}
