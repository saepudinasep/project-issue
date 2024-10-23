<?php

namespace Database\Seeders;

use App\Models\DetailRegion;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DetailRegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $detailRegions = [
            ['region_id' => 1, 'cabang_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['region_id' => 1, 'cabang_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['region_id' => 1, 'cabang_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['region_id' => 1, 'cabang_id' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['region_id' => 1, 'cabang_id' => 5, 'created_at' => now(), 'updated_at' => now()],
            ['region_id' => 2, 'cabang_id' => 36, 'created_at' => now(), 'updated_at' => now()],
            ['region_id' => 2, 'cabang_id' => 37, 'created_at' => now(), 'updated_at' => now()],
            ['region_id' => 2, 'cabang_id' => 38, 'created_at' => now(), 'updated_at' => now()],
            ['region_id' => 2, 'cabang_id' => 39, 'created_at' => now(), 'updated_at' => now()],
            ['region_id' => 2, 'cabang_id' => 40, 'created_at' => now(), 'updated_at' => now()],
            ['region_id' => 3, 'cabang_id' => 6, 'created_at' => now(), 'updated_at' => now()],
            ['region_id' => 3, 'cabang_id' => 7, 'created_at' => now(), 'updated_at' => now()],
            ['region_id' => 3, 'cabang_id' => 8, 'created_at' => now(), 'updated_at' => now()],
            ['region_id' => 3, 'cabang_id' => 9, 'created_at' => now(), 'updated_at' => now()],
            ['region_id' => 3, 'cabang_id' => 10, 'created_at' => now(), 'updated_at' => now()],
            ['region_id' => 4, 'cabang_id' => 21, 'created_at' => now(), 'updated_at' => now()],
            ['region_id' => 4, 'cabang_id' => 22, 'created_at' => now(), 'updated_at' => now()],
            ['region_id' => 4, 'cabang_id' => 23, 'created_at' => now(), 'updated_at' => now()],
            ['region_id' => 4, 'cabang_id' => 24, 'created_at' => now(), 'updated_at' => now()],
            ['region_id' => 4, 'cabang_id' => 25, 'created_at' => now(), 'updated_at' => now()],
            ['region_id' => 5, 'cabang_id' => 16, 'created_at' => now(), 'updated_at' => now()],
            ['region_id' => 5, 'cabang_id' => 17, 'created_at' => now(), 'updated_at' => now()],
            ['region_id' => 5, 'cabang_id' => 18, 'created_at' => now(), 'updated_at' => now()],
            ['region_id' => 5, 'cabang_id' => 19, 'created_at' => now(), 'updated_at' => now()],
            ['region_id' => 5, 'cabang_id' => 20, 'created_at' => now(), 'updated_at' => now()],
            ['region_id' => 6, 'cabang_id' => 41, 'created_at' => now(), 'updated_at' => now()],
            ['region_id' => 6, 'cabang_id' => 42, 'created_at' => now(), 'updated_at' => now()],
            ['region_id' => 6, 'cabang_id' => 43, 'created_at' => now(), 'updated_at' => now()],
            ['region_id' => 6, 'cabang_id' => 44, 'created_at' => now(), 'updated_at' => now()],
            ['region_id' => 6, 'cabang_id' => 45, 'created_at' => now(), 'updated_at' => now()],
            ['region_id' => 7, 'cabang_id' => 26, 'created_at' => now(), 'updated_at' => now()],
            ['region_id' => 7, 'cabang_id' => 27, 'created_at' => now(), 'updated_at' => now()],
            ['region_id' => 7, 'cabang_id' => 28, 'created_at' => now(), 'updated_at' => now()],
            ['region_id' => 7, 'cabang_id' => 29, 'created_at' => now(), 'updated_at' => now()],
            ['region_id' => 7, 'cabang_id' => 30, 'created_at' => now(), 'updated_at' => now()],
            ['region_id' => 8, 'cabang_id' => 31, 'created_at' => now(), 'updated_at' => now()],
            ['region_id' => 8, 'cabang_id' => 32, 'created_at' => now(), 'updated_at' => now()],
            ['region_id' => 8, 'cabang_id' => 33, 'created_at' => now(), 'updated_at' => now()],
            ['region_id' => 8, 'cabang_id' => 34, 'created_at' => now(), 'updated_at' => now()],
            ['region_id' => 8, 'cabang_id' => 35, 'created_at' => now(), 'updated_at' => now()],
            ['region_id' => 9, 'cabang_id' => 46, 'created_at' => now(), 'updated_at' => now()],
            ['region_id' => 9, 'cabang_id' => 47, 'created_at' => now(), 'updated_at' => now()],
            ['region_id' => 9, 'cabang_id' => 48, 'created_at' => now(), 'updated_at' => now()],
            ['region_id' => 9, 'cabang_id' => 49, 'created_at' => now(), 'updated_at' => now()],
            ['region_id' => 9, 'cabang_id' => 50, 'created_at' => now(), 'updated_at' => now()],
            ['region_id' => 10, 'cabang_id' => 11, 'created_at' => now(), 'updated_at' => now()],
            ['region_id' => 10, 'cabang_id' => 12, 'created_at' => now(), 'updated_at' => now()],
            ['region_id' => 10, 'cabang_id' => 13, 'created_at' => now(), 'updated_at' => now()],
            ['region_id' => 10, 'cabang_id' => 14, 'created_at' => now(), 'updated_at' => now()],
            ['region_id' => 10, 'cabang_id' => 15, 'created_at' => now(), 'updated_at' => now()],
        ];

        // Insert detail region ke database
        DetailRegion::insert($detailRegions);
    }
}
