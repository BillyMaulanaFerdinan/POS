<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
        LevelSeeder::class,
        UserSeeder::class,
        SupplierSeeder::class,
        KategoriSeeder::class,
        BarangSeeder::class,
        PenjualanSeeder::class,
        PenjualanDetailSeeder::class,
        StokSeeder::class,

        // Tambahkan semua seeder lainnya di sini
    ]);
    }
}
