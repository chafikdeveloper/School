<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Web Dev',
                'slug' => 'web-dev'
            ],
            [
                'name' => 'App Dev',
                'slug' => 'app-dev'
            ],
            [
                'name' => 'Marketing',
                'slug' => 'marketing'
            ],
            [
                'name' => 'Design',
                'slug' => 'design'
            ],
            [
                'name' => 'Robotic',
                'slug' => 'robotic'
            ],
        ];

        foreach($categories as $category) {
            Category::create($category);
        }
    }
}
