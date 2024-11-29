<?php

namespace Database\Seeders;

use App\Enums\Semester;
use App\Models\Campus;
use App\Models\Employee;
use App\Models\Student;
use App\Models\User;
use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    public function run(): void
    {
        $campuses = Campus::query()
            ->with('offices')
            ->get();

        $students = Student::all();

        foreach (range(1, mt_rand(20, 40)) as $index) {
            $user = User::factory()->create();
            $campus = $campuses->random();

            $employee = Employee::create([
                'user_id' => $user->id,
                'office_id' => $campus->offices->random()?->id,
                'campus_id' => $campus->id,
            ]);

            foreach (range(1, mt_rand(10, 20)) as $index) {
                $waiver = $employee->waivers()
                    ->create([
                        'year' => 2024 + $index,
                        'semester' => fake()->randomElement(Semester::cases()),
                    ]);

                foreach (range(1, mt_rand(1, 3)) as $b) {
                    $waiver->beneficiaries()
                        ->create([
                            'relationship' => fake()->jobTitle(),
                            'student_id' => $students->random()->id,
                        ]);
                }
            }
        }
    }
}
