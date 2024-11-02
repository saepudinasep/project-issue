<?php

namespace Database\Seeders;

use App\Models\CatagoryIssue;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CatagoryIssueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => 'APP NO TIDAK MUNCUL',
                'details' => 'No APP tidak terbentuk setelah submit Task Survey',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'AUTO CANCEL IA TASK TIDAK TURUN',
                'details' => 'Aplikasi dengan result IA terkena Auto Cancel IA di WISe dikarenakan Perbedaan data inputan Entry Point, MSS dan WISe',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'AUTOFILL TIDAK BERJALAN',
                'details' => 'No tlp pasangan berubah otomatis pada WISE, sehingga tidak bisa di submit',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'DUKCAPIL NOT MATCH/NOT FOUND',
                'details' => 'Hasil pengecekan dukcapil not match/not found',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'DUPLICATE TIDAK MUNCUL',
                'details' => 'Sudah submit KI tapi tidak muncul duplicate, hanya muncul pot yang sebelumnya yaitu nb honda syariah produktif, submitan yang terbaru adalah pot offering nb yamaha syariah produktif namun tidak muncul di menu duplicate',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'EMAIL DEALER TIDAK TURUN',
                'details' => 'STATUS DI WISE SUDAH PO, NAMUN PO BELUM TERKIRIM DI DEALER',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'GAGAL UPLOAD TASK',
                'details' => 'Muncul error Failed sent to DMS saat melakukan submit task',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'GENERATE TASK BELUM SEMPURNA',
                'details' => 'Ketika di task text model diinput secara manual dan muncul NTF = 0',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'HUMAN ERRORS',
                'details' => 'Pasangan dan atau Guarantor tidak memilki No Telepon',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'LOGIC ASSIGN TIDAK BERJALAN',
                'details' => 'Aplikasi tidak turun ke menu unassign (>15 menit)',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'MSS FORCE CLOSED',
                'details' => 'Auto close saat mengerjakan Layer 1 di PreSurvey',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'STUCK TASK',
                'details' => 'Mohon dibantu status masih stuck TC ( sistem eror ) sudah buat tiket dari hari sabtu namun belum ada balasan',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'STUCK TASK CAE',
                'details' => 'Setelah submit KI aplikasi tidak turun ODR NO',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'TASK FOTO/TEXT BELUM MUNCUL',
                'details' => 'Task Promise to Survey & Pre Survey sudah released tetapi Task Foto & Task Text tidak muncul',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'USER TIDAK BISA LOGIN',
                'details' => 'Tidak dapat login MSS / tampil warning Invalid ID or Password atau Login Failed, Please Check your UserID and Password',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ];

        // Insert category issues ke database
        CatagoryIssue::insert($categories);
    }
}
