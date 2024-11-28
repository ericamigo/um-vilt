<?php

namespace Database\Seeders;

use App\Models\Campus;
use App\Models\Employee;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    public function run(): void
    {
        $campuses = Campus::query()
            ->with('offices')
            ->get();

        foreach (range(1, mt_rand(20, 40)) as $index) {
            $user = User::factory()->create();
            $campus = $campuses->random();

            Employee::create([
                'user_id' => $user->id,
                'office_id' => $campus->offices->random()?->id,
                'campus_id' => $campus->id,
            ]);
        }
    }
}
