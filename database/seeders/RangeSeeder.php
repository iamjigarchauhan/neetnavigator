<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Rap2hpoutre\FastExcel\FastExcel;

class RangeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('range_rankings')->truncate();
        $users = (new FastExcel)->import(public_path('range.xlsx'), function ($line) {
        //    dd($line);
           $marks = array_map('trim',explode('-',$line['marks']));
           $ranks = array_map('trim',explode('-',$line['ranks']));
        //    dd($ranks);   
               $record = [
                'year' => '2022',
                'min_mark' => $marks[1],
                'max_mark' => $marks[0],
                'min_rank' => $ranks[1],
                'max_rank' => $ranks[0],
               ]; 
               DB::table('range_rankings')->insert($record);

        });
    }
}
