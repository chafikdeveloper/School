<?php

namespace Database\Seeders;

use App\Models\Instructor;
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

        User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => env('ADMIN_PASSWORD'),
            'role' => 'Admin',
            'phone' => '+971 50 543 4297'
        ]);

        $this->call(InstructorSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(StudentSeeder::class);
        $this->call(CourseSeeder::class);
    }
}
