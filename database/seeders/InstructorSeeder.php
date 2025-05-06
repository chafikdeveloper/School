<?php

namespace Database\Seeders;

use App\Models\Instructor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class InstructorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $instructors = [
            [
                'name' => 'Aisha Al Mansoori',
                'email' => 'aisha.mansoori@techschool.ae',
                'phone' => '+971 50 123 4567',
                'profession' => 'Front-End Web Developer',
                'bio' => 'Aisha is a front-end developer with over 7 years of experience building responsive and accessible websites. She specializes in HTML, CSS, JavaScript, and modern frameworks like React and Vue.js. She is passionate about helping beginners find their way in the world of web development.',
            ],
            [
                'name' => 'Kareem Al Farsi',
                'email' => 'kareem.farsi@techschool.ae',
                'phone' => '+971 55 987 6543',
                'profession' => 'Mobile App Engineer',
                'bio' => 'Kareem is a full-stack mobile app engineer who has developed cross-platform apps for startups across the UAE and Europe. With deep knowledge in Flutter, React Native, and Swift, he focuses on creating user-friendly and performant applications.',
            ],
            [
                'name' => 'Layla Hassan',
                'email' => 'layla.hassan@techschool.ae',
                'phone' => '+971 52 456 7890',
                'profession' => 'Digital Marketing Strategist',
                'bio' => 'Layla has helped dozens of brands in MENA achieve growth through innovative digital marketing campaigns. With over a decade of experience in SEO, SEM, and social media marketing, she teaches students how to think like marketers and act like analysts.',
            ],
            [
                'name' => 'Omar Bin Saeed',
                'email' => 'omar.saeed@techschool.ae',
                'phone' => '+971 56 321 8901',
                'profession' => 'UI/UX Designer',
                'bio' => 'Omar brings 8 years of hands-on experience in UI/UX design, having worked with major UAE startups and design agencies. His courses focus on user research, wireframing, and design systems using tools like Figma and Adobe XD.',
            ],
            [
                'name' => 'Fatima Al Qasimi',
                'email' => 'fatima.qasimi@techschool.ae',
                'phone' => '+971 58 654 3210',
                'profession' => 'Robotics Engineer',
                'bio' => 'Fatima is a robotics and automation expert with experience in industrial robotics, Arduino, and AI integration. She has led robotics workshops for youth across the GCC and is passionate about promoting STEM education among young learners.',
            ],
        ];

        foreach($instructors as $instructor) {
            Instructor::create($instructor);
        }
    }
}
