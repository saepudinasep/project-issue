<?php

namespace Database\Seeders;

use App\Models\Cabang;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CabangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cabangs = [
            ['name' => 'Bekasi 1 Bekasi Barat', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Jakarta Pusat', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Jakarta Selatan 1 Pasar Minggu', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Bogor', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Bekasi 2 Tambun Selatan', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Bandung 3 Setiabudi', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Tasikmalaya', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Bandung 1 Regol', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Cianjur', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Sukabumi', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Gowa', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Manado', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Palu', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'KENDARI', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Makassar 2 Biringkanaya', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Cilacap 1 Cilacap Utara', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Klaten', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Magelang', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Kebumen 2 Gombong', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Gunungkidul Wonosari', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Surabaya 1 Sukolilo', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Sidoarjo 2 Krian', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Surabaya 5 Rungkut', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Madiun', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Pasuruan', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Lubuk Pakam', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Padang', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Pekanbaru 1 Marpoyan Damai', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Air Molek', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Medan 2 Medan Selayang', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Tugu Mulyo', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Pangkalpinang', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Palembang 2 Bukit Lama', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Lampung 2 Pringsewu', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Metro', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Ciledug', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Tangerang 7 Cipondoh', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Ciputat', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'BALARAJA', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Ciputat', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Brebes 1 Wanasari', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Brebes 2 Bumiayu', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Tegal 1 Dukuh Turi', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Pemalang 2 Randudongkal', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Semarang 2 Ungaran Barat', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Samarinda', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Balikpapan', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Bontang', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Pangkalan Bun', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Paser', 'created_at' => now(), 'updated_at' => now()],
        ];

        // Insert cabang ke database
        Cabang::insert($cabangs);
    }
}
