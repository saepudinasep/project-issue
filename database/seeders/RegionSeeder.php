<?php

namespace Database\Seeders;

use App\Models\Region;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $regions = [
            ['name' => 'JABODEBEK', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'BANTEN', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'JAWA BARAT', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'JATIM BALI', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'JATENG SELATAN', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'JATENG UTARA', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'SUMBAGUT', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'SUMBANGSEL', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'KALIMANTAN', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'SULAWESI', 'created_at' => now(), 'updated_at' => now()],
        ];

        // Insert regions ke database
        Region::insert($regions);
    }
}
