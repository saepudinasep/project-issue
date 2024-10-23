<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'nik' => '000170608',
                'name' => 'KRISTIO BUDI PRAMANA',
                'password' => bcrypt('Pass1234$'),
                'role_id' => 1, // MSP
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nik' => '000233767',
                'name' => 'NUR ALFIYYAH FAKHIRA',
                'password' => bcrypt('Pass1234$'),
                'role_id' => 1, // MSP
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nik' => '000221534',
                'name' => 'SAFIRA PUTRI HELMINA',
                'password' => bcrypt('Pass1234$'),
                'role_id' => 2, // Regular
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nik' => '000140056',
                'name' => 'ARIF BUDIMAN',
                'password' => bcrypt('Pass1234$'),
                'role_id' => 2, // Regular
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nik' => '000233377',
                'name' => 'REZA ILHAM PUTRA',
                'password' => bcrypt('Pass1234$'),
                'role_id' => 3, // MasKu
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nik' => '000180077',
                'name' => 'DWI PUSPITASARI',
                'password' => bcrypt('Pass1234$'),
                'role_id' => 3, // MasKu
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nik' => '000232959',
                'name' => 'ALBERT TJIAPUTRA',
                'password' => bcrypt('Pass1234$'),
                'role_id' => 4, // MotorKu
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nik' => '000190300',
                'name' => 'JHONRIVERS THOMOS SINAGA',
                'password' => bcrypt('Pass1234$'),
                'role_id' => 4, // MotorKu
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nik' => '000211010',
                'name' => 'ROLAND ANDI SETIA',
                'password' => bcrypt('Pass1234$'),
                'role_id' => 5, // MobilKu
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nik' => '000212745',
                'name' => 'NUR SYAIFUDIN',
                'password' => bcrypt('Pass1234$'),
                'role_id' => 5, // MobilKu
                'created_at' => now(),
                'updated_at' => now()
            ],
        ];

        // Insert users ke database
        User::insert($users);
    }
}
