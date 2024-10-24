<?php

namespace Database\Seeders;

use App\Models\Issue;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class IssueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $issues = [
            [
                'detail_region_id' => 1,
                'user_id' => 9,
                'tanggal' => '2024-09-02',
                'jam' => '08:41:00',
                'category_issue_id' => 14,
                'noodr' => 'ODRNO2408300369',
                'details_issue' => 'Task Promise to Survey & Pre Survey sudah released tetapi Task Foto & Task Text tidak muncul',
                'solusi' => 'Solved by FAQ',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'detail_region_id' => 2,
                'user_id' => 7,
                'tanggal' => '2024-09-02',
                'jam' => '11:30:00',
                'category_issue_id' => 13,
                'nopolo' => '-',
                'details_issue' => 'Setelah submit KI aplikasi tidak turun ODR NO',
                'solusi' => 'Solved by ISR',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'detail_region_id' => 3,
                'user_id' => 8,
                'tanggal' => '2024-09-02',
                'jam' => '11:47:00',
                'category_issue_id' => 14,
                'noodr' => 'ODRNO2409020613',
                'details_issue' => 'Task Promise to Survey & Pre Survey sudah released tetapi Task Foto & Task Text tidak muncul',
                'solusi' => 'Solved by ISR',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'detail_region_id' => 4,
                'user_id' => 10,
                'tanggal' => '2024-09-02',
                'jam' => '12:27:00',
                'category_issue_id' => 10,
                'noodr' => 'ODRNO2409020916',
                'details_issue' => 'Status mss masih pending >15 menit',
                'solusi' => 'Solved by ISR',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'detail_region_id' => 5,
                'user_id' => 7,
                'tanggal' => '2024-09-02',
                'jam' => '13:08:00',
                'category_issue_id' => 13,
                'noodr' => 'ODRNO2409021690',
                'details_issue' => 'Setelah submit KI aplikasi tidak turun ODR NO',
                'solusi' => 'Solved by ISR',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        // Insert issues ke database
        Issue::insert($issues);
    }
}
