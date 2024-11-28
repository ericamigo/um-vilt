<?php

namespace Database\Seeders;

use App\Models\Campus;
use Illuminate\Database\Seeder;

class CollegeSeeder extends Seeder
{
    public function run(): void
    {
        $campuses = Campus::all();

        foreach ($campuses as $campus) {
            foreach (range(1, mt_rand(5, 10)) as $index) {
                $campus->colleges()
                    ->create([
                        'name' => fake()->jobTitle(),
                    ]);
            }
        }
    }
}
