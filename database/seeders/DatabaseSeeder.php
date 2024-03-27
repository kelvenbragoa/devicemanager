<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        DB::table('roles')->insert(
            ['name' => 'Admin', 'created_at' => now(),
    'updated_at' => now(),],
            ['name' => 'Supervisor', 'created_at' => now(),
    'updated_at' => now(),],
            ['name' => 'Operator', 'created_at' => now(),
    'updated_at' => now(),],
        );
        DB::table('device_statuses')->insert(
            ['name' => 'Working Fine', 'created_at' => now(),
    'updated_at' => now(),],
            ['name' => 'Damaged', 'created_at' => now(),
    'updated_at' => now(),],
        );
        DB::table('provinces')->insert(
            ['name' => 'Maputo Cidade', 'created_at' => now(),
    'updated_at' => now(),],
            ['name' => 'Maputo Provincia', 'created_at' => now(),
    'updated_at' => now(),],
            ['name' => 'Gaza', 'created_at' => now(),
    'updated_at' => now(),],
            ['name' => 'Inhambane', 'created_at' => now(),
    'updated_at' => now(),],
            ['name' => 'Sofala', 'created_at' => now(),
    'updated_at' => now(),],
            ['name' => 'Manica', 'created_at' => now(),
    'updated_at' => now(),],
            ['name' => 'Tete', 'created_at' => now(),
    'updated_at' => now(),],
            ['name' => 'Nampula', 'created_at' => now(),
    'updated_at' => now(),],
            ['name' => 'Zambezia', 'created_at' => now(),
    'updated_at' => now(),],
            ['name' => 'Cabo Delgado', 'created_at' => now(),
    'updated_at' => now(),],
            ['name' => 'Niassa', 'created_at' => now(),
    'updated_at' => now(),],
    );
    DB::table('device_statuses')->insert(
        ['name' => 'Entrega', 
        'created_at' => now(),
        'updated_at' => now(),
        ],
        ['name' => 'Recolha'
        , 'created_at' => now(),
        'updated_at' => now(),
    ],
);
DB::table('users')->insert(
    [
    'name' => 'Admin',
    'email' => 'admin@cornelder.co.mz',
    'mobile' => '811234567',
    'role_id'=>1,
    'password' => Hash::make('password'),
    'created_at' => now(),
    'updated_at' => now(),
]
);
    }
}
