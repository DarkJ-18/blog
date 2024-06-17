<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Post; // Importa el modelo Post
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Post::factory(100)->create();
        $this->call(
            UserSeeder::class,
        );
    }
}