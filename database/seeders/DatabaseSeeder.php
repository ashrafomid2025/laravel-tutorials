<?php

namespace Database\Seeders;

// use App\Models\Students;
use App\Models\Students;
use App\Models\Teachers;
// use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     * seeding => bd seeding, seed 
     *  factory=> fake
     */
    public function run(): void
    {
        // User::factory(10)->create();
        // Students::factory(50)->create();
        // Teachers::factory(100)->create();
        Students::factory(15000)->create();
        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
