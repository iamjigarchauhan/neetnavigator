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
        $users = (new FastExcel)->import(public_path('collegelist.xlsx'), function ($line) {
            $state = DB::table('states')->whereName($line['State'])->first();
            if($state != null){
                $college = [
                    'name'=>$line['Name and Address of Medical College/Medical Institution'],
                    'state_id'=>$state->id,
                    'university'=>$line['University Name'],
                    'institution_type'=>$line['Management of College'],
                    'year_inspection'=>$line['Year of Inspection of College'],
                    'annual_seat'=> !empty($line['Annual Intake (Seats)']) && $line['Annual Intake (Seats)'] > 0  ? $line['Annual Intake (Seats)'] : 0,
                    'lop_date'=> !empty($line['Date of LOP']) && $line['Date of LOP'] != 'N/A' ? $line['Date of LOP'] : null,
                    'status'=>'active'
                ];
                return DB::table('colleges')->insert($college);
            } else {
                return  DB::table('states')->insert([
                    'country_code'=>'IN',
                    'name'=>$line['State'],
                    'status'=>'active'
                ]);
            }
        });

    }
}
