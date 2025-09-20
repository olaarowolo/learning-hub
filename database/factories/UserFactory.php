<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => static::$password ??= Hash::make('password'),
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}

class BlogPostFactory extends Factory
{
    protected $model = BlogPost::class;

    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'slug' => $this->faker->slug,
            'excerpt' => $this->faker->paragraph,
            'content' => $this->faker->text(500),
            'author_id' => User::factory(),
            'featured_image' => $this->faker->imageUrl,
            'category' => $this->faker->word,
            'tags' => $this->faker->words(3),
            'reading_time' => $this->faker->numberBetween(1, 10),
            'published_at' => $this->faker->dateTimeBetween('-1 year', 'now'),
        ];
    }
}
