<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Rap2hpoutre\FastExcel\FastExcel;
class AddCollegesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('colleges')->truncate();
        DB::table('neet_range_rankings')->truncate();
        $users = (new FastExcel)->import(public_path('collegelist.xlsx'), function ($line) {
            $state = DB::table('states')->whereName($line['State'])->first();
            $city = DB::table('cities')->whereName($line['CITY'])->first();
            if($city == null){
                $city = DB::table('cities')->insertGetId([
                    'name' => $line['CITY'],
                    'state_id' => $state->id,
                    'status' => 'active'
                ]);
            }
            if($state != null){
                $college = [
                    'name'=>$line['Name and Address of Medical College/Medical Institution'],
                    'state_id'=>$state->id,
                    'city_id'=>$city->id ?? $city,
                    'university'=>$line['University Name'],
                    'institution_type'=>$line['Management of College'],
                    'year_inspection'=>$line['Year of Inspection of College'],
                    'annual_seat'=> !empty($line['Annual Intake (Seats)']) && $line['Annual Intake (Seats)'] > 0  ? $line['Annual Intake (Seats)'] : 0,
                    'lop_date'=> !empty($line['Date of LOP']) && $line['Date of LOP'] != 'N/A' ? $line['Date of LOP'] : null,
                    'status'=>'active'
                ];
                $college = DB::table('colleges')->insertGetId($college);
                // dd($college);
                $marks[] = [
                    'year' => 2019,
                    'category'=> 'GENERAL',
                    'min_mark'=> $line['2019_NEET_CUT_OFF_SCORE_GENERAL'],
                    'min_rank'=> $line['2019_NEETRANK_GENERAL'],
                    'college_id'=>$college,
                    'status'=>'active'
                ];
                $marks[] = [
                    'year' => 2019,
                    'category'=> 'ST',
                    'min_mark'=> $line['2019_NEET_CUT_OFF_SCORE_ST'],
                    'min_rank'=> $line['2019_NEET_RANK_ST'],
                    'college_id'=>$college,
                    'status'=>'active'
                ];
                $marks[] = [
                    'year' => 2019,
                    'category'=> 'OBC',
                    'min_mark'=> $line['2019_NEET_CUT_OFF_SCORE_OBC'],
                    'min_rank'=> $line['2019_NEET_RANK_OBC'],
                    'college_id'=>$college,
                    'status'=>'active'
                ];
                $marks[] = [
                    'year' => 2019,
                    'category'=> 'SC',
                    'min_mark'=> $line['2019_NEET_CUT_OFF_SCORE_SC'],
                    'min_rank'=> $line['2019_NEETRANK_SC'],
                    'college_id'=>$college,
                    'status'=>'active'
                ];
                $marks[] = [
                    'year' => 2020,
                    'category'=> 'GENERAL',
                    'min_mark'=> $line['2020_NEET_CUT_OFF_SCORE_GENERAL'],
                    'min_rank'=> $line['2020_NEETRANK_GENERAL'],
                    'college_id'=>$college,
                    'status'=>'active'
                ];
                $marks[] = [
                    'year' => 2020,
                    'category'=> 'ST',
                    'min_mark'=> $line['2020_NEET_CUT_OFF_SCORE_ST'],
                    'min_rank'=> $line['2020_NEET_RANK_ST'],
                    'college_id'=>$college,
                    'status'=>'active'
                ];
                $marks[] = [
                    'year' => 2020,
                    'category'=> 'OBC',
                    'min_mark'=> $line['2020_NEET_CUT_OFF_SCORE_OBC'],
                    'min_rank'=> $line['2020_NEET_RANK_OBC'],
                    'college_id'=>$college,
                    'status'=>'active'
                ];
                $marks[] = [
                    'year' => 2020,
                    'category'=> 'SC',
                    'min_mark'=> $line['2020_NEET_CUT_OFF_SCORE_SC'],
                    'min_rank'=> $line['2020_NEETRANK_SC'],
                    'college_id'=>$college,
                    'status'=>'active'
                ];
                $marks[] = [
                    'year' => 2021,
                    'category'=> 'GENERAL',
                    'min_mark'=> $line['2021_NEET_CUT_OFF_SCORE_GENERAL'],
                    'min_rank'=> $line['2021_NEETRANK_GENERAL'],
                    'college_id'=>$college,
                    'status'=>'active'
                ];
                $marks[] = [
                    'year' => 2021,
                    'category'=> 'ST',
                    'min_mark'=> $line['2021_NEET_CUT_OFF_SCORE_ST'],
                    'min_rank'=> $line['2021_NEET_RANK_ST'],
                    'college_id'=>$college,
                    'status'=>'active'
                ];
                $marks[] = [
                    'year' => 2021,
                    'category'=> 'OBC',
                    'min_mark'=> $line['2021_NEET_CUT_OFF_SCORE_OBC'],
                    'min_rank'=> $line['2021_NEET_RANK_OBC'],
                    'college_id'=>$college,
                    'status'=>'active'
                ];
                $marks[] = [
                    'year' => 2021,
                    'category'=> 'SC',
                    'min_mark'=> $line['2021_NEET_CUT_OFF_SCORE_SC'],
                    'min_rank'=> $line['2021_NEETRANK_SC'],
                    'college_id'=>$college,
                    'status'=>'active'
                ];
                DB::table('neet_range_rankings')->insert($marks);
                return true;
            }
        });

    }
}
