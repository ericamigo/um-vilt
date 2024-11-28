<?php

namespace Database\Seeders;

use App\Models\Branch;
use App\Models\Office;
use Illuminate\Database\Seeder;

class CampusSeeder extends Seeder
{
    public function run(): void
    {
        foreach (range(1, mt_rand(30, 40)) as $index) {
            Office::create([
                'name' => fake()->streetName(),
            ]);
        }

        $branches = Branch::all();
        $offices = Office::all();

        foreach ($branches as $branch) {
            foreach (range(1, mt_rand(5, 10)) as $index) {
                $campus = $branch->campuses()
                    ->create([
                        'name' => fake()->city(),
                    ]);

                $campus->offices()->attach(
                    $offices->random(mt_rand(5, 10))
                );
            }
        }
    }
}
