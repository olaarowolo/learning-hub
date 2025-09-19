<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = \App\Models\User::where('email', 'test@example.com')->first();

        if ($user) {
            \App\Models\UserProfile::updateOrCreate(
                ['user_id' => $user->id],
                [
                    'phone' => '123-456-7890',
                    'date_of_birth' => '2000-01-01',
                    'role' => 'student',
                    'school_name' => 'OA Tutors Academy',
                    'school_location' => 'London, UK',
                    'grade_level' => 'Year 10',
                    'curriculum' => 'uk',
                    'learning_goals' => json_encode(['Improve math skills', 'Prepare for exams']),
                    'subject_preferences' => json_encode(['Math', 'Science']),
                    'notifications_enabled' => true,
                    'timezone' => 'Europe/London',
                    'parent_email' => 'parent@example.com',
                    'parent_phone' => '+44 20 1234 5678',
                ]
            );
        }
    }
}
