<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Database\Factories\TeamFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        User::factory()->create([
            'name' => 'Carlos',
            'email' => 'carlos@prueba.com',
            'password' => bcrypt('12345678'),
        ]);
        TeamFactory::new()->create([
            'user_id' => 1,
            'name' => 'Carlos\'s Team',
            'personal_team' => true,
        ]);
    }
}
