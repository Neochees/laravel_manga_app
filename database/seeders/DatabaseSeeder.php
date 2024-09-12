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

        $user = User::factory(3)->create([
            'title' => 'Test Title',
            'author' => 'name',
            'description' => 'Test Description',
            'genre' => 'genre',
            'rating' => '5,56'
        ]);

    }

}
