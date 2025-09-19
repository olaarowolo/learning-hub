<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\User;
use App\Models\UserProfile;

class StudentRegistrationTest extends TestCase
{
    use RefreshDatabase;

    public function test_student_can_register()
    {
        $response = $this->post('/register', [
            'name' => 'Test Student',
            'email' => 'student@test.com',
            'password' => 'password123',
            'password_confirmation' => 'password123',
            'date_of_birth' => '2005-01-01',
            'role' => 'student',
        ]);

        $response->assertRedirect('/registration-success');

        $this->assertDatabaseHas('users', [
            'email' => 'student@test.com',
            'name' => 'Test Student',
        ]);

        $user = User::where('email', 'student@test.com')->first();
        $this->assertNotNull($user);

        $this->assertDatabaseHas('user_profiles', [
            'user_id' => $user->id,
            'role' => 'student',
            'date_of_birth' => '2005-01-01 00:00:00',
        ]);
    }

    public function test_student_registration_requires_parent_contact_if_under_18()
    {
        $response = $this->post('/register', [
            'name' => 'Young Student',
            'email' => 'youngstudent@test.com',
            'password' => 'password123',
            'password_confirmation' => 'password123',
            'date_of_birth' => now()->subYears(10)->format('Y-m-d'),
            'role' => 'student',
        ]);

        $response->assertSessionHasErrors(['parent_email', 'parent_phone']);
    }
}
