<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\Student;
use App\Models\User;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    public function run(): void
    {
        $courses = Course::all();

        foreach (range(1, mt_rand(50, 70)) as $index) {
            $user = User::factory()->create();
            $course = $courses->random();

            Student::create([
                'user_id' => $user->id,
                'course_id' => $course->id,
            ]);
        }
    }
}
