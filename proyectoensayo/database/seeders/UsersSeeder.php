<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    public function run(): void
    {
        User::insert([
            ['name' => 'Carlos Admin',   'email' => 'admin@web.com',   'password' => Hash::make('password'), 'role_id' => 1],
            ['name' => 'Laura Teacher',  'email' => 'teacher@web.com', 'password' => Hash::make('password'), 'role_id' => 2],
            ['name' => 'Estudiante 1',   'email' => 's1@web.com',      'password' => Hash::make('password'), 'role_id' => 3],
            ['name' => 'Estudiante 2',   'email' => 's2@web.com',      'password' => Hash::make('password'), 'role_id' => 3],
            ['name' => 'Estudiante 3',   'email' => 's3@web.com',      'password' => Hash::make('password'), 'role_id' => 3],
            ['name' => 'Estudiante 4',   'email' => 's4@web.com',      'password' => Hash::make('password'), 'role_id' => 3],
            ['name' => 'Estudiante 5',   'email' => 's5@web.com',      'password' => Hash::make('password'), 'role_id' => 3],
            ['name' => 'Estudiante 6',   'email' => 's6@web.com',      'password' => Hash::make('password'), 'role_id' => 3],
            ['name' => 'Estudiante 7',   'email' => 's7@web.com',      'password' => Hash::make('password'), 'role_id' => 3],
            ['name' => 'Estudiante 8',   'email' => 's8@web.com',      'password' => Hash::make('password'), 'role_id' => 3],
        ]);
    }
}

