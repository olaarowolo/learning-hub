<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Course;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Course::truncate(); // Prevents duplicating data on re-seed

        Course::create([
            'title' => 'Introduction to Algebra',
            'description' => 'Learn the fundamentals of algebraic expressions and equations.',
            'image_url' => 'https://placehold.co/600x400/007bff/white?text=Maths',
            'progress' => 75,
        ]);

        Course::create([
            'title' => 'Biology for Beginners',
            'description' => 'Explore the fascinating world of living organisms.',
            'image_url' => 'https://placehold.co/600x400/28a745/white?text=Science',
            'progress' => 40,
        ]);

        Course::create([
            'title' => 'World History: Ancient Civilizations',
            'description' => 'A journey through the history of ancient empires.',
            'image_url' => 'https://placehold.co/600x400/ffc107/white?text=History',
            'progress' => 10,
        ]);

        Course::create([
            'title' => 'Creative Writing Workshop',
            'description' => 'Unleash your inner storyteller and write compelling narratives.',
            'image_url' => 'https://placehold.co/600x400/dc3545/white?text=English',
            'progress' => 0,
        ]);
    }
}
