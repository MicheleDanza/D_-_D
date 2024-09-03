<?php

namespace Database\Seeders;

use App\Models\Alignment;
use App\Models\DamageType;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        $this->call(AbilityScoresSeeder::class);

        $this->call(SkillsSeeder::class);

        $this->call(AlignmentsSeeder::class);

        $this->call(ConditionsSeeder::class);

        $this->call(DamageTypesSeeder::class);
    }
}
