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
            // AdminSeeder::class
            RangeSeeder::class
            // StatesSeeder::class,
            // CitiesSeeder::class,
            // CollegesSeeder::class,
            // NeetRangeRankingSeeder::class,
        ]);
    }
}
