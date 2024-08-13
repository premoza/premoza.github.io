<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $debugEnabled = config('app.debug');
        if ($debugEnabled) {
            User::factory(100)->create();

            User::create([
                'first_name' => 'John',
                'last_name' => 'User',
                'email' => 'user@example.com',
                'login_method' => 'form',
                'status' => 'active',
                'type' => 'user',
                'password' => 'user'
            ]);

            User::create([
                'first_name' => 'John',
                'last_name' => 'Admin',
                'email' => 'admin@example.com',
                'login_method' => 'form',
                'status' => 'active',
                'type' => 'admin',
                'password' => 'admin'
            ]);
        }
    }
}
