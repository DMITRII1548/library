<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'teacher@gmail.com',
            'role_id' => Role::where('title', 'teacher')->first()->id,
        ]);

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'student@gmail.com',
            'role_id' => Role::where('title', 'student')->first()->id,
        ]);
    }
}
