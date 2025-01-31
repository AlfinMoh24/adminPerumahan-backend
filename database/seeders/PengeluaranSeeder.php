<?php

namespace Database\Seeders;

use App\Models\Pengeluaran;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PengeluaranSeeder extends Seeder
{
    public function run(): void
    {
        Pengeluaran::insert(
            [
                    [
                        'deskripsi' => 'Pembelian Alat Kebersihan',
                        'jumlah' => 500000,
                        'tanggal' => '2024-11-02',
                        'created_at' => now(),
                        'updated_at' => now(),
                    ],
                    [
                        'deskripsi' => 'Gaji Satpam',
                        'jumlah' => 1000000,
                        'tanggal' => '2024-11-05',
                        'created_at' => now(),
                        'updated_at' => now(),
                    ],
                    [
                        'deskripsi' => 'Pembelian Alat Pemadam Kebakaran',
                        'jumlah' => 600000,
                        'tanggal' => '2024-11-15',
                        'created_at' => now(),
                        'updated_at' => now(),
                    ],
                    [
                        'deskripsi' => 'Perbaikan Lampu Jalan',
                        'jumlah' => 200000,
                        'tanggal' => '2024-11-18',
                        'created_at' => now(),
                        'updated_at' => now(),
                    ],
                    [
                        'deskripsi' => 'Pengelolaan Keamanan',
                        'jumlah' => 700000,
                        'tanggal' => '2024-11-22',
                        'created_at' => now(),
                        'updated_at' => now(),
                    ],
                    [
                        'deskripsi' => 'Penyewaan Alat Berat',
                        'jumlah' => 800000,
                        'tanggal' => '2024-11-25',
                        'created_at' => now(),
                        'updated_at' => now(),
                    ],
                    [
                        'deskripsi' => 'Penyediaan Air Bersih',
                        'jumlah' => 500000,
                        'tanggal' => '2024-11-30',
                        'created_at' => now(),
                        'updated_at' => now(),
                    ],

                    [
                        'deskripsi' => 'Gaji Satpam',
                        'jumlah' => 1000000,
                        'tanggal' => '2024-12-06',
                        'created_at' => now(),
                        'updated_at' => now(),
                    ],
                    [
                        'deskripsi' => 'Perawatan Taman',
                        'jumlah' => 400000,
                        'tanggal' => '2024-12-09',
                        'created_at' => now(),
                        'updated_at' => now(),
                    ],
                    [
                        'deskripsi' => 'Biaya Pengelolaan Sampah',
                        'jumlah' => 300000,
                        'tanggal' => '2024-12-12',
                        'created_at' => now(),
                        'updated_at' => now(),
                    ],
                    [
                        'deskripsi' => 'Pembelian Alat Pemadam Kebakaran',
                        'jumlah' => 600000,
                        'tanggal' => '2024-12-14',
                        'created_at' => now(),
                        'updated_at' => now(),
                    ],
                    [
                        'deskripsi' => 'Perbaikan Lampu Jalan',
                        'jumlah' => 200000,
                        'tanggal' => '2024-12-16',
                        'created_at' => now(),
                        'updated_at' => now(),
                    ],
                    [
                        'deskripsi' => 'Pengelolaan Keamanan',
                        'jumlah' => 700000,
                        'tanggal' => '2024-12-18',
                        'created_at' => now(),
                        'updated_at' => now(),
                    ],
                    [
                        'deskripsi' => 'Penyewaan Alat Berat',
                        'jumlah' => 800000,
                        'tanggal' => '2024-12-20',
                        'created_at' => now(),
                        'updated_at' => now(),
                    ],
                    [
                        'deskripsi' => 'Gaji Pegawai Kebersihan',
                        'jumlah' => 950000,
                        'tanggal' => '2024-12-22',
                        'created_at' => now(),
                        'updated_at' => now(),
                    ],
                    [
                        'deskripsi' => 'Penyediaan Air Bersih',
                        'jumlah' => 500000,
                        'tanggal' => '2024-12-24',
                        'created_at' => now(),
                        'updated_at' => now(),
                    ],
                    [
                        'deskripsi' => 'Pembelian Alat Kebersihan',
                        'jumlah' => 500000,
                        'tanggal' => '2025-01-02',
                        'created_at' => now(),
                        'updated_at' => now(),
                    ],
                    [
                        'deskripsi' => 'Gaji Satpam',
                        'jumlah' => 1000000,
                        'tanggal' => '2025-01-05',
                        'created_at' => now(),
                        'updated_at' => now(),
                    ],
                    [
                        'deskripsi' => 'Perawatan Taman',
                        'jumlah' => 400000,
                        'tanggal' => '2025-01-08',
                        'created_at' => now(),
                        'updated_at' => now(),
                    ],
                    [
                        'deskripsi' => 'Biaya Pengelolaan Sampah',
                        'jumlah' => 300000,
                        'tanggal' => '2025-01-11',
                        'created_at' => now(),
                        'updated_at' => now(),
                    ],
                    [
                        'deskripsi' => 'Pembelian Alat Pemadam Kebakaran',
                        'jumlah' => 600000,
                        'tanggal' => '2025-01-13',
                        'created_at' => now(),
                        'updated_at' => now(),
                    ],
                    [
                        'deskripsi' => 'Perbaikan Lampu Jalan',
                        'jumlah' => 250000,
                        'tanggal' => '2025-01-16',
                        'created_at' => now(),
                        'updated_at' => now(),
                    ],
                    [
                        'deskripsi' => 'Pengelolaan Keamanan',
                        'jumlah' => 700000,
                        'tanggal' => '2025-01-18',
                        'created_at' => now(),
                        'updated_at' => now(),
                    ],
                    [
                        'deskripsi' => 'Penyewaan Alat Berat',
                        'jumlah' => 800000,
                        'tanggal' => '2025-01-21',
                        'created_at' => now(),
                        'updated_at' => now(),
                    ],
                    [
                        'deskripsi' => 'Gaji Pegawai Kebersihan',
                        'jumlah' => 950000,
                        'tanggal' => '2025-01-23',
                        'created_at' => now(),
                        'updated_at' => now(),
                    ],
                    [
                        'deskripsi' => 'Penyediaan Air Bersih',
                        'jumlah' => 500000,
                        'tanggal' => '2025-01-25',
                        'created_at' => now(),
                        'updated_at' => now(),
                    ],

            ]
        );
    }
}
