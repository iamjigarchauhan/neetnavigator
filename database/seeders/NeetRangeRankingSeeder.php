<?php

namespace Database\Seeders;

use App\Models\NeetRangeRanking;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NeetRangeRankingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        NeetRangeRanking::truncate();
        NeetRangeRanking::insert([
            [
                'year' => '2022',
                'min_mark' => '720',
                'max_mark' => '715',
                'min_rank' => '1',
                'max_rank' => '19',
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'year' => '2022',
                'min_mark' => '710',
                'max_mark' => '700',
                'min_rank' => '23',
                'max_rank' => '202',
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'year' => '2022',
                'min_mark' => '698',
                'max_mark' => '690',
                'min_rank' => '204',
                'max_rank' => '512',
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'year' => '2022',
                'min_mark' => '688',
                'max_mark' => '680',
                'min_rank' => '522',
                'max_rank' => '971',
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'year' => '2022',
                'min_mark' => '679',
                'max_mark' => '670',
                'min_rank' => '992',
                'max_rank' => '1701',
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'year' => '2022',
                'min_mark' => '669',
                'max_mark' => '660',
                'min_rank' => '1702',
                'max_rank' => '2751',
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'year' => '2022',
                'min_mark' => '659',
                'max_mark' => '650',
                'min_rank' => '2759',
                'max_rank' => '4153',
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'year' => '2022',
                'min_mark' => '649',
                'max_mark' => '640',
                'min_rank' => '4170',
                'max_rank' => '6061',
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'year' => '2022',
                'min_mark' => '639',
                'max_mark' => '630',
                'min_rank' => '6065',
                'max_rank' => '8522',
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'year' => '2022',
                'min_mark' => '629',
                'max_mark' => '620',
                'min_rank' => '8535',
                'max_rank' => '11463',
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'year' => '2022',
                'min_mark' => '619',
                'max_mark' => '610',
                'min_rank' => '11464',
                'max_rank' => '15057',
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'year' => '2022',
                'min_mark' => '609',
                'max_mark' => '600',
                'min_rank' => '15070',
                'max_rank' => '19136',
                'created_at' => date('Y-m-d H:i:s'),
            ],
        ]);
    }
}
