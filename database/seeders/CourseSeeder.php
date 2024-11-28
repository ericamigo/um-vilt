<?php

namespace Database\Seeders;

use App\Models\College;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    public function run(): void
    {
        $colleges = College::all();

        foreach ($colleges as $college) {
            foreach (range(1, mt_rand(5, 10)) as $index) {
                $college->courses()
                    ->create([
                        'name' => fake()->jobTitle(),
                    ]);
            }
        }
    }
}
