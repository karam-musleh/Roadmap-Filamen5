<?php

namespace Database\Seeders;

use App\Models\Feature;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
    Feature::factory()->times(10)->create(); // Set a fixed seed for reproducibility

        User::factory()->create([
            'name' => 'Karam ',
            'email' => 'karam@example.com',
        ]);
    }
}
