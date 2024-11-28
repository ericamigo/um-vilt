<?php

namespace Database\Seeders;

use App\Models\Branch;
use Illuminate\Database\Seeder;

class CampusSeeder extends Seeder
{
    public function run(): void
    {
        $branches = Branch::all();

        foreach ($branches as $branch) {
            foreach (range(1, mt_rand(5, 10)) as $index) {
                $branch->campuses()
                    ->create([
                        'name' => fake()->city(),
                    ]);
            }
        }
    }
}
