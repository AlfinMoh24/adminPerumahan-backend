<?php

namespace Database\Seeders;

use App\Models\Pemasukan;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        $this->call([
            PenghuniSeeder::class,
            RumahSeeder::class,
            RiwayatSeeder::class,
            PembayaranSeeder::class,
            PengeluaranSeeder::class,
            PemasukanSeeder::class
            // Seeder lainnya bisa ditambahkan di sini
        ]);
    }
}
