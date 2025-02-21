<?php

namespace Database\Seeders;

use App\Models\penghuni;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class penghuniSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Penghuni::insert([
            [
                'id' => 1,
                'nama_lengkap' => 'Budi Santoso',
                'foto_ktp' => 'ktp/ktp.png',
                'nomor_telepon' => '081234567890',
                'status_perkawinan' => 'Menikah',
                'status_penghuni' => 'Tetap',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'nama_lengkap' => 'Siti Aminah',
                'foto_ktp' => 'ktp/ktp.png',
                'nomor_telepon' => '082345678901',
                'status_perkawinan' => 'Belum Menikah',
                'status_penghuni' => 'Tetap',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 3,
                'nama_lengkap' => 'Joko Widodo',
                'foto_ktp' => 'ktp/ktp.png',
                'nomor_telepon' => '083456789012',
                'status_perkawinan' => 'Menikah',
                'status_penghuni' => 'Kontrak',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 4,
                'nama_lengkap' => 'Ani Lestari',
                'foto_ktp' => 'ktp/ktp.png',
                'nomor_telepon' => '084567890123',
                'status_perkawinan' => 'Belum Menikah',
                'status_penghuni' => 'Tetap',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 5,
                'nama_lengkap' => 'Hendra Wijaya',
                'foto_ktp' => 'ktp/ktp.png',
                'nomor_telepon' => '081212121212',
                'status_perkawinan' => 'Menikah',
                'status_penghuni' => 'Kontrak',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 6,
                'nama_lengkap' => 'Dewi Sartika',
                'foto_ktp' => 'ktp/ktp.png',
                'nomor_telepon' => '082323232323',
                'status_perkawinan' => 'Menikah',
                'status_penghuni' => 'Kontrak',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 7,
                'nama_lengkap' => 'Rizki Ramadhan',
                'foto_ktp' => 'ktp/ktp.png',
                'nomor_telepon' => '083434343434',
                'status_perkawinan' => 'Belum Menikah',
                'status_penghuni' => 'Tetap',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 8,
                'nama_lengkap' => 'Indah Permatasari',
                'foto_ktp' => 'ktp/ktp.png',
                'nomor_telepon' => '084545454545',
                'status_perkawinan' => 'Menikah',
                'status_penghuni' => 'Kontrak',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 9,
                'nama_lengkap' => 'Fajar Nugraha',
                'foto_ktp' => 'ktp/ktp.png',
                'nomor_telepon' => '081656565656',
                'status_perkawinan' => 'Menikah',
                'status_penghuni' => 'Tetap',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 10,
                'nama_lengkap' => 'Mega Sari',
                'foto_ktp' => 'ktp/ktp.png',
                'nomor_telepon' => '082767676767',
                'status_perkawinan' => 'Belum Menikah',
                'status_penghuni' => 'Kontrak',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 11,
                'nama_lengkap' => 'Yudi Pratama',
                'foto_ktp' => 'ktp/ktp.png',
                'nomor_telepon' => '083878787878',
                'status_perkawinan' => 'Menikah',
                'status_penghuni' => 'Tetap',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 12,
                'nama_lengkap' => 'Anisa Putri',
                'foto_ktp' => 'ktp/ktp.png',
                'nomor_telepon' => '084989898989',
                'status_perkawinan' => 'Belum Menikah',
                'status_penghuni' => 'Tetap',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 13,
                'nama_lengkap' => 'Bagus Setiawan',
                'foto_ktp' => 'ktp/ktp.png',
                'nomor_telepon' => '081010101010',
                'status_perkawinan' => 'Menikah',
                'status_penghuni' => 'Kontrak',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 14,
                'nama_lengkap' => 'Ratna Kusuma',
                'foto_ktp' => 'ktp/ktp.png',
                'nomor_telepon' => '082121212121',
                'status_perkawinan' => 'Belum Menikah',
                'status_penghuni' => 'Tetap',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 15,
                'nama_lengkap' => 'Dedi Susanto',
                'foto_ktp' => 'ktp/ktp.png',
                'nomor_telepon' => '083232323232',
                'status_perkawinan' => 'Menikah',
                'status_penghuni' => 'Kontrak',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 16,
                'nama_lengkap' => 'Fitri Aulia',
                'foto_ktp' => 'ktp/ktp.png',
                'nomor_telepon' => '084343434343',
                'status_perkawinan' => 'Belum Menikah',
                'status_penghuni' => 'Tetap',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 17,
                'nama_lengkap' => 'Eko Supriyanto',
                'foto_ktp' => 'ktp/ktp.png',
                'nomor_telepon' => '081454545454',
                'status_perkawinan' => 'Menikah',
                'status_penghuni' => 'Tetap',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 18,
                'nama_lengkap' => 'Lina Kuswanti',
                'foto_ktp' => 'ktp/ktp.png',
                'nomor_telepon' => '082565656565',
                'status_perkawinan' => 'Belum Menikah',
                'status_penghuni' => 'Kontrak',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 19,
                'nama_lengkap' => 'Adi Saputra',
                'foto_ktp' => 'ktp/ktp.png',
                'nomor_telepon' => '083676767676',
                'status_perkawinan' => 'Menikah',
                'status_penghuni' => 'Kontrak',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 20,
                'nama_lengkap' => 'Nadia Ayu',
                'foto_ktp' => 'ktp/ktp.png',
                'nomor_telepon' => '084787878787',
                'status_perkawinan' => 'Belum Menikah',
                'status_penghuni' => 'Tetap',
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);
    }
}
