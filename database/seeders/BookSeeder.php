<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = Category::factory()->count(3)->create();

        foreach ($categories as $category) {
            Book::factory(5)
                ->create([
                    'category_id' => $category->id,
                ]);
        }
    }
}
