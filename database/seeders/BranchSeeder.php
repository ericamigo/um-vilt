<?php

namespace Database\Seeders;

use App\Models\Branch;
use Illuminate\Database\Seeder;

class BranchSeeder extends Seeder
{
    public function run(): void
    {
        foreach (range(1, mt_rand(10, 30)) as $index) {
            Branch::create([
                'name' => fake()->company(),
            ]);
        }
    }
}
