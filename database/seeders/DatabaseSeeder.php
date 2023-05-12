<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            // AdminSeeder::class,
            StatesSeeder::class,
            CitiesSeeder::class,
            CollegesSeeder::class,
            AddCollegesSeeder::class,
            // NeetRangeRankingSeeder::class,
        ]);
    }
}
