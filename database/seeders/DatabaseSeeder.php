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
        // Ensure the admin user exists
        if (!\App\Models\User::find(1)) {
            \App\Models\User::factory()->create([
                'id' => 1, // Ensure the admin user has ID 1
                'name' => 'Admin User',
                'email' => 'admin@example.com',
                'password' => bcrypt('password'),
            ]);
        }

        $this->call([
            CourseSeeder::class,
            BlogPostSeeder::class,
        ]);
    }
}
