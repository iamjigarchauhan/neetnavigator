<?php

namespace Database\Seeders;

use App\Models\College;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CollegesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        College::truncate();
        College::insert([
            [
                'name'              => 'Andaman & Nicobar Islands Institute of Medical Sciences, Port Blair',
                'university'        => 'Pondicherry University',
                'course_name'       => 'MBBS',
                'institution_type'  => 'Govt.',
                'state_id'          => 10,
                'year_inspection'   => '2015',
                'annual_seat'       => 114,
                'mci_recognition'   => 'Recognized for 100 seats only with respect to students admitted in 2015-16. continuation of recognition granted for the intake of 114 MBBS seats for the batches admitted upto academic year 2016-17 only for the year 2021-22.Granted renewal of permission for annual intake of 114 MBBS seats for the year 2021-22.',
                'lop_date'          => '2015-06-08',
                'total_fee'         => '1 Crore - 1.25 Crore',
                'status'            => 'active',
                'created_at'        => date('Y-m-d H:i:s'),
            ],
        ]);
    }
}
