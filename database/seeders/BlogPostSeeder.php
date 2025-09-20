<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\BlogPost;

class BlogPostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        BlogPost::truncate(); // Clear all existing records in the blog_posts table

        BlogPost::create([
            'id' => 1, // Assign ID 1
            'title' => 'Welcome to Our Learning Hub!',
            'slug' => 'welcome-to-our-learning-hub',
            'excerpt' => 'Discover what makes our Learning Hub the perfect place to grow and achieve your goals.',
            'content' => "Welcome to our Learning Hub! We are thrilled to have you join our community of learners, educators, and enthusiasts who are passionate about growth and knowledge. Our platform is designed to provide you with the tools, resources, and support you need to excel in your learning journey.\n\n" .
                "At the Learning Hub, we believe that education is the key to unlocking potential and achieving dreams. Whether you are here to enhance your skills, explore new topics, or connect with like-minded individuals, you are in the right place.\n\n" .
                "Here are some of the exciting features you can look forward to:\n\n" .
                "1. **Comprehensive Courses**: Dive into a wide range of courses tailored to meet your needs. From academic subjects to professional development, we have something for everyone.\n\n" .
                "2. **Expert Instructors**: Learn from the best! Our instructors are experienced professionals dedicated to helping you succeed.\n\n" .
                "3. **Interactive Learning**: Engage with interactive content, quizzes, and discussions to make your learning experience enjoyable and effective.\n\n" .
                "4. **Community Support**: Join a vibrant community of learners. Share your experiences, ask questions, and grow together.\n\n" .
                "5. **Flexible Learning**: Access our resources anytime, anywhere. Learn at your own pace and on your schedule.\n\n" .
                "We are committed to your success and are constantly working to improve our platform. Your feedback is invaluable to us, so please do not hesitate to share your thoughts and suggestions.\n\n" .
                "Thank you for choosing the Learning Hub as your partner in education. Let us embark on this exciting journey together and make learning a truly rewarding experience.\n\n" .
                "Happy learning!\n\n" .
                "Warm regards,\n\n" .
                "The Learning Hub Team",
            'author_id' => 1, // Assuming the admin user has ID 1
            'featured_image' => 'images/welcome.jpg',
            'category' => 'General',
            'tags' => json_encode(['welcome', 'introduction', 'learning']),
            'reading_time' => 5,
            'published_at' => now(),
        ]);
    }
}
