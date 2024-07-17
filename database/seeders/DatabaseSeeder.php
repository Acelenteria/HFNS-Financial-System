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
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
        ]);
        User::factory()->create([
            'name' => 'Staff',
            'email' => 'staff@example.com',
        ]);

        $this->call([
            RolesSeeder::class,
            // UserSeeder::class
        ]);
    }
}