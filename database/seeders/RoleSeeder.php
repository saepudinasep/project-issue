<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            ['name' => 'MSP', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Reguler', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'MasKu', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'MotorKu', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'MobilKu', 'created_at' => now(), 'updated_at' => now()],
        ];

        // Insert roles ke database
        Role::insert($roles);
    }
}
