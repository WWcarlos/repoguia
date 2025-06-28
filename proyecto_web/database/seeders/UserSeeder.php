<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Rol;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            ['rol_id' => 1, 'name' => 'Admin', 'email' => 'admin@example.com', 'password' => 'admin'],
            ['rol_id' => Rol::inRandomOrder()->first()->id, 'name' => 'John Doe', 'email' => 'john@example.com', 'password' => Hash::make('password')],
            ['rol_id' => Rol::inRandomOrder()->first()->id, 'name' => 'Jane Smith', 'email' => 'jane@example.com', 'password' => Hash::make('password')],
            ['rol_id' => Rol::inRandomOrder()->first()->id, 'name' => 'Alice Johnson', 'email' => 'alice@example.com', 'password' => Hash::make('password')],
            ['rol_id' => Rol::inRandomOrder()->first()->id, 'name' => 'Bob Brown', 'email' => 'bob@example.com', 'password' => Hash::make('password')],
            ['rol_id' => Rol::inRandomOrder()->first()->id, 'name' => 'Charlie Davis', 'email' => 'charlie@example.com', 'password' => Hash::make('password')],
            ['rol_id' => Rol::inRandomOrder()->first()->id, 'name' => 'David Evans', 'email' => 'david@example.com', 'password' => Hash::make('password')],
            ['rol_id' => Rol::inRandomOrder()->first()->id, 'name' => 'Eve Foster', 'email' => 'eve@example.com', 'password' => Hash::make('password')],
            ['rol_id' => Rol::inRandomOrder()->first()->id, 'name' => 'Frank Green', 'email' => 'frank@example.com', 'password' => Hash::make('password')],
            ['rol_id' => Rol::inRandomOrder()->first()->id, 'name' => 'Grace Harris', 'email' => 'grace@example.com', 'password' => Hash::make('password')],
            ['rol_id' => Rol::inRandomOrder()->first()->id, 'name' => 'Hank Ingram', 'email' => 'hank@example.com', 'password' => Hash::make('password')],
            ['rol_id' => Rol::inRandomOrder()->first()->id, 'name' => 'Ivy Johnson', 'email' => 'ivy@example.com', 'password' => Hash::make('password')],
            ['rol_id' => Rol::inRandomOrder()->first()->id, 'name' => 'Jack King', 'email' => 'jack@example.com', 'password' => Hash::make('password')],
            ['rol_id' => Rol::inRandomOrder()->first()->id, 'name' => 'Karen Lee', 'email' => 'karen@example.com', 'password' => Hash::make('password')],
            ['rol_id' => Rol::inRandomOrder()->first()->id, 'name' => 'Larry Moore', 'email' => 'larry@example.com', 'password' => Hash::make('password')],
            ['rol_id' => Rol::inRandomOrder()->first()->id, 'name' => 'Mona Nelson', 'email' => 'mona@example.com', 'password' => Hash::make('password')],
            ['rol_id' => Rol::inRandomOrder()->first()->id, 'name' => 'Nina Owens', 'email' => 'nina@example.com', 'password' => Hash::make('password')],
            ['rol_id' => Rol::inRandomOrder()->first()->id, 'name' => 'Oscar Perez', 'email' => 'oscar@example.com', 'password' => Hash::make('password')],
            ['rol_id' => Rol::inRandomOrder()->first()->id, 'name' => 'Paul Quinn', 'email' => 'paul@example.com', 'password' => Hash::make('password')],
            ['rol_id' => Rol::inRandomOrder()->first()->id, 'name' => 'Quincy Roberts', 'email' => 'quincy@example.com', 'password' => Hash::make('password')],
            ['rol_id' => Rol::inRandomOrder()->first()->id, 'name' => 'Rachel Scott', 'email' => 'rachel@example.com', 'password' => Hash::make('password')],
            ['rol_id' => Rol::inRandomOrder()->first()->id, 'name' => 'Steve Turner', 'email' => 'steve@example.com', 'password' => Hash::make('password')],
            ['rol_id' => Rol::inRandomOrder()->first()->id, 'name' => 'Tina Underwood', 'email' => 'tina@example.com', 'password' => Hash::make('password')],
            ['rol_id' => Rol::inRandomOrder()->first()->id, 'name' => 'Uma Vance', 'email' => 'uma@example.com', 'password' => Hash::make('password')],
            ['rol_id' => Rol::inRandomOrder()->first()->id, 'name' => 'Victor White', 'email' => 'victor@example.com', 'password' => Hash::make('password')],
            ['rol_id' => Rol::inRandomOrder()->first()->id, 'name' => 'Wendy Xander', 'email' => 'wendy@example.com', 'password' => Hash::make('password')],
            ['rol_id' => Rol::inRandomOrder()->first()->id, 'name' => 'Xander Young', 'email' => 'xander@example.com', 'password' => Hash::make('password')],
            ['rol_id' => Rol::inRandomOrder()->first()->id, 'name' => 'Yara Zane', 'email' => 'yara@example.com', 'password' => Hash::make('password')],
            ['rol_id' => Rol::inRandomOrder()->first()->id, 'name' => 'Zane Adams', 'email' => 'zane@example.com', 'password' => Hash::make('password')],
            ['rol_id' => Rol::inRandomOrder()->first()->id, 'name' => 'Amy Baker', 'email' => 'amy@example.com', 'password' => Hash::make('password')],
            ['rol_id' => Rol::inRandomOrder()->first()->id, 'name' => 'Brian Clark', 'email' => 'brian@example.com', 'password' => Hash::make('password')],
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}