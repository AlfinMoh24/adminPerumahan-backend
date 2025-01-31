<?php

namespace Database\Seeders;

use App\Models\Pemasukan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PemasukanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pemasukan::insert(
            [
                [
                    'jenis_pemasukan' => 'iuran satpam',
                    'jumlah' => 500000,
                    'tanggal' => '2024-11-01',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'jenis_pemasukan' => 'iuran kebersihan',
                    'jumlah' => 1000000,
                    'tanggal' => '2024-11-05',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'jenis_pemasukan' => 'sumbangan',
                    'jumlah' => 500000,
                    'tanggal' => '2024-11-08',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'jenis_pemasukan' => 'Satpam',
                    'jumlah' => 300000,
                    'tanggal' => '2024-11-10',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'jenis_pemasukan' => 'iuran satpam',
                    'jumlah' => 500000,
                    'tanggal' => '2024-11-12',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'jenis_pemasukan' => 'iuran kebersihan',
                    'jumlah' => 1000000,
                    'tanggal' => '2024-11-15',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'jenis_pemasukan' => 'sumbangan',
                    'jumlah' => 200000,
                    'tanggal' => '2024-11-18',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'jenis_pemasukan' => 'Proposal',
                    'jumlah' => 300000,
                    'tanggal' => '2024-11-20',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'jenis_pemasukan' => 'iuran satpam',
                    'jumlah' => 500000,
                    'tanggal' => '2024-11-22',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'jenis_pemasukan' => 'iuran kebersihan',
                    'jumlah' => 1000000,
                    'tanggal' => '2024-11-25',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],

                // December 2024
                [
                    'jenis_pemasukan' => 'sumbangan',
                    'jumlah' => 200000,
                    'tanggal' => '2024-12-01',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'jenis_pemasukan' => 'Proposal',
                    'jumlah' => 300000,
                    'tanggal' => '2024-12-03',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'jenis_pemasukan' => 'iuran satpam',
                    'jumlah' => 500000,
                    'tanggal' => '2024-12-05',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'jenis_pemasukan' => 'iuran kebersihan',
                    'jumlah' => 1000000,
                    'tanggal' => '2024-12-08',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'jenis_pemasukan' => 'sumbangan',
                    'jumlah' => 200000,
                    'tanggal' => '2024-12-10',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'jenis_pemasukan' => 'iuran Kebersihan',
                    'jumlah' => 300000,
                    'tanggal' => '2024-12-12',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'jenis_pemasukan' => 'iuran satpam',
                    'jumlah' => 500000,
                    'tanggal' => '2024-12-15',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'jenis_pemasukan' => 'iuran kebersihan',
                    'jumlah' => 1000000,
                    'tanggal' => '2024-12-18',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'jenis_pemasukan' => 'sumbangan',
                    'jumlah' => 200000,
                    'tanggal' => '2024-12-20',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'jenis_pemasukan' => 'iuran Kebersihan',
                    'jumlah' => 300000,
                    'tanggal' => '2024-12-22',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],

                // January 2025
                [
                    'jenis_pemasukan' => 'iuran satpam',
                    'jumlah' => 500000,
                    'tanggal' => '2025-01-01',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'jenis_pemasukan' => 'iuran kebersihan',
                    'jumlah' => 1000000,
                    'tanggal' => '2025-01-03',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'jenis_pemasukan' => 'sumbangan',
                    'jumlah' => 200000,
                    'tanggal' => '2025-01-05',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'jenis_pemasukan' => 'iuran Kebersihan',
                    'jumlah' => 300000,
                    'tanggal' => '2025-01-08',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'jenis_pemasukan' => 'iuran satpam',
                    'jumlah' => 500000,
                    'tanggal' => '2025-01-10',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'jenis_pemasukan' => 'iuran kebersihan',
                    'jumlah' => 1000000,
                    'tanggal' => '2025-01-12',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'jenis_pemasukan' => 'sumbangan',
                    'jumlah' => 200000,
                    'tanggal' => '2025-01-15',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'jenis_pemasukan' => 'Satpam',
                    'jumlah' => 300000,
                    'tanggal' => '2025-01-18',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'jenis_pemasukan' => 'iuran satpam',
                    'jumlah' => 500000,
                    'tanggal' => '2025-01-20',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'jenis_pemasukan' => 'iuran kebersihan',
                    'jumlah' => 1000000,
                    'tanggal' => '2025-01-22',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],

            ]
        );
    }
}
