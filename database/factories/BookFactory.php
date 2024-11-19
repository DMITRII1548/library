<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->jobTitle(),
            'author' => fake()->userName(),
            'description' => fake()->text(500),
            'image' => asset('dev/book.jpg'),
            'file' => asset('dev/book.pdf'),
            'user_id' => null,
            'category_id' => Category::factory()->create()->id,
        ];
    }
}
