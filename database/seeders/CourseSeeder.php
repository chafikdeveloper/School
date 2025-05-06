<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $courses = [
            [
                'title' => 'Modern Web Development with React',
                'description' => 'Build fast, responsive web apps using React and modern tools.',
                'price' => 499,
                'category_id' => 1,
                'instructor_id' => 1,
                'available' => true,
            ],
            [
                'title' => 'Advanced JavaScript for Developers',
                'description' => 'Deep dive into modern JavaScript concepts like closures, async/await, and ES modules.',
                'price' => 449,
                'category_id' => 1,
                'instructor_id' => 1,
                'available' => true,
            ],
            [
                'title' => 'Building REST APIs with Laravel',
                'description' => 'Learn how to create robust APIs using Laravel and best backend practices.',
                'price' => 529,
                'category_id' => 1,
                'instructor_id' => 1,
                'available' => true,
            ],

            // App Development (Instructor ID 2)
            [
                'title' => 'Cross-Platform App Development with Flutter',
                'description' => 'Master Flutter and Dart to build beautiful native mobile apps.',
                'price' => 599,
                'category_id' => 2,
                'instructor_id' => 2,
                'available' => true,
            ],
            // [
            //     'title' => 'React Native Bootcamp',
            //     'description' => 'Develop cross-platform mobile apps with React Native and Expo.',
            //     'price' => 489,
            //     'category_id' => 2,
            //     'instructor_id' => 2,
            //     'available' => true,
            // ],
            [
                'title' => 'iOS App Development with SwiftUI',
                'description' => 'Get started with Swift and SwiftUI to build sleek, modern iOS applications.',
                'price' => 599,
                'category_id' => 2,
                'instructor_id' => 2,
                'available' => true,
            ],

            // Marketing (Instructor ID 3)
            [
                'title' => 'Digital Marketing Mastery',
                'description' => 'SEO, SEM, content, and analytics all in one complete digital marketing course.',
                'price' => 399,
                'category_id' => 3,
                'instructor_id' => 3,
                'available' => true,
            ],
            // [
            //     'title' => 'Social Media Advertising Strategy',
            //     'description' => 'Learn to run paid campaigns effectively on Facebook, Instagram, and TikTok.',
            //     'price' => 379,
            //     'category_id' => 3,
            //     'instructor_id' => 3,
            //     'available' => true,
            // ],
            [
                'title' => 'Email Marketing & Automation',
                'description' => 'Master Mailchimp and build email funnels that convert.',
                'price' => 349,
                'category_id' => 3,
                'instructor_id' => 3,
                'available' => true,
            ],

            // Design (Instructor ID 4)
            [
                'title' => 'UI/UX Design from Concept to Prototype',
                'description' => 'Design beautiful and intuitive interfaces with a focus on user experience.',
                'price' => 449,
                'category_id' => 4,
                'instructor_id' => 4,
                'available' => true,
            ],
            [
                'title' => 'Figma for Designers: From Basics to Pro',
                'description' => 'Create pixel-perfect UIs and design systems in Figma.',
                'price' => 399,
                'category_id' => 4,
                'instructor_id' => 4,
                'available' => true,
            ],
            [
                'title' => 'Graphic Design with Adobe Suite',
                'description' => 'Master Photoshop, Illustrator, and InDesign for branding and digital art.',
                'price' => 559,
                'category_id' => 4,
                'instructor_id' => 4,
                'available' => true,
            ],

            // Robotics (Instructor ID 5)
            [
                'title' => 'Introduction to Robotics and Automation',
                'description' => 'Explore Arduino, basic sensors, and automation concepts with hands-on projects.',
                'price' => 549,
                'category_id' => 5,
                'instructor_id' => 5,
                'available' => true,
            ],
            // [
            //     'title' => 'AI for Robotics: Beginner to Intermediate',
            //     'description' => 'Learn how to integrate basic AI models into robotics applications.',
            //     'price' => 599,
            //     'category_id' => 5,
            //     'instructor_id' => 5,
            //     'available' => true,
            // ],
            [
                'title' => 'Robotic Arm Programming with ROS',
                'description' => 'Build, simulate, and control robotic arms using Robot Operating System (ROS).',
                'price' => 699,
                'category_id' => 5,
                'instructor_id' => 5,
                'available' => true,
            ],
        ];

        foreach ($courses as $course) {
            Course::create($course);
        }
    }
}
