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
        // User::factory(10)->create();

        $adminUser = User::factory()->make([
            'name' => 'Admin',
            'email' => 'admin@mail.com',
        ]);

        User::updateOrCreate([
            'email' => $adminUser->email,
        ], [
            ...$adminUser?->toArray(),
            'password' => 'power@123'
        ]);
    }
}
