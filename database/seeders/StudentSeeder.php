<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $students = [
            [
                'name' => 'Mohammed Al Najjar',
                'email' => 'mohammed.najjar@gmail.com',
                'phone' => '+971 50 223 1122',
            ],
            [
                'name' => 'Salma Khaled',
                'email' => 'salma.khaled@gmail.com',
                'phone' => '+971 52 334 5566',
            ],
            [
                'name' => 'Yousef Rashed',
                'email' => 'yousef.rashed@outlook.com',
                'phone' => '+971 55 667 8899',
            ],
            [
                'name' => 'Noura Al Shamsi',
                'email' => 'noura.shamsi@gmail.com',
                'phone' => '+971 56 778 9922',
            ],
            [
                'name' => 'Hassan El Amin',
                'email' => 'hassan.elamin@yahoo.com',
                'phone' => '+971 58 101 2020',
            ],
        ];

        foreach($students as $student) {
            Student::create($student);
        }
    }
}
