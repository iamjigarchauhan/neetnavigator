<?php

namespace Database\Seeders;

use App\Models\City;
use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        City::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        City::insert([
            [
                'state_id'    => 1,
                'name'        => 'Adilabad',
                'status'      => 'active',
                'created_at'  => date('Y-m-d H:i:s'),
            ],
            [
                'state_id'    => 1,
                'name'        => 'Anantapur',
                'status'      => 'active',
                'created_at'  => date('Y-m-d H:i:s'),
            ],
            [
                'state_id'    => 1,
                'name'        => 'Chittoor',
                'status'      => 'active',
                'created_at'  => date('Y-m-d H:i:s'),
            ],
            [
                'state_id'    => 1,
                'name'        => 'Kakinada',
                'status'      => 'active',
                'created_at'  => date('Y-m-d H:i:s'),
            ],
            [
                'state_id'    => 1,
                'name'        => 'Guntur',
                'status'      => 'active',
                'created_at'  => date('Y-m-d H:i:s'),
            ],
            [
                'state_id'    => 1,
                'name'        => 'Hyderabad',
                'status'      => 'active',
                'created_at'  => date('Y-m-d H:i:s'),
            ],
            [
                'state_id'    => 1,
                'name'        => 'Karimnagar',
                'status'      => 'active',
                'created_at'  => date('Y-m-d H:i:s'),
            ],
            [
                'state_id'    => 1,
                'name'        => 'Khammam',
                'status'      => 'active',
                'created_at'  => date('Y-m-d H:i:s'),
            ],
            [
                'state_id'    => 1,
                'name'        => 'Krishna',
                'status'      => 'active',
                'created_at'  => date('Y-m-d H:i:s'),
            ],
            [
                'state_id'    => 1,
                'name'        => 'Kurnool',
                'status'      => 'active',
                'created_at'  => date('Y-m-d H:i:s'),
            ],
            [
                'state_id'    => 1,
                'name'        => 'Mahbubnagar',
                'status'      => 'active',
                'created_at'  => date('Y-m-d H:i:s'),
            ],
            [
                'state_id'    => 1,
                'name'        => 'Medak',
                'status'      => 'active',
                'created_at'  => date('Y-m-d H:i:s'),
            ],
            [
                'state_id'    => 1,
                'name'        => 'Nalgonda',
                'status'      => 'active',
                'created_at'  => date('Y-m-d H:i:s'),
            ],
            [
                'state_id'    => 1,
                'name'        => 'Nizamabad',
                'status'      => 'active',
                'created_at'  => date('Y-m-d H:i:s'),
            ],
            [
                'state_id'    => 1,
                'name'        => 'Ongole',
                'status'      => 'active',
                'created_at'  => date('Y-m-d H:i:s'),
            ],
            [
                'state_id'    => 1,
                'name'        => 'Srikakulam',
                'status'      => 'active',
                'created_at'  => date('Y-m-d H:i:s'),
            ],
            [
                'state_id'    => 1,
                'name'        => 'Nellore',
                'status'      => 'active',
                'created_at'  => date('Y-m-d H:i:s'),
            ],
            [
                'state_id'    => 1,
                'name'        => 'Visakhapatnam',
                'status'      => 'active',
                'created_at'  => date('Y-m-d H:i:s'),
            ],
            [
                'state_id'    => 1,
                'name'        => 'Vizianagaram',
                'status'      => 'active',
                'created_at'  => date('Y-m-d H:i:s'),
            ],
            [
                'state_id'    => 1,
                'name'        => 'Warangal',
                'status'      => 'active',
                'created_at'  => date('Y-m-d H:i:s'),
            ],
            [
                'state_id'    => 1,
                'name'        => 'Eluru',
                'status'      => 'active',
                'created_at'  => date('Y-m-d H:i:s'),
            ],
            [
                'state_id'    => 1,
                'name'        => 'Kadapa',
                'status'      => 'active',
                'created_at'  => date('Y-m-d H:i:s'),
            ],
            [
                'state_id'    => 2,
                'name'        => 'Anjaw',
                'status'      => 'active',
                'created_at'  => date('Y-m-d H:i:s'),
            ],
            [
                'state_id'    => 2,
                'name'        => 'Changlang',
                'status'      => 'active',
                'created_at'  => date('Y-m-d H:i:s'),
            ],
            [
                'state_id'    => 2,
                'name'        => 'East Siang',
                'status'      => 'active',
                'created_at'  => date('Y-m-d H:i:s'),
            ],
            [
                'state_id'    => 2,
                'name'        => 'Kurung Kumey',
                'status'      => 'active',
                'created_at'  => date('Y-m-d H:i:s'),
            ],
            [
                'state_id'    => 2,
                'name'        => 'Lohit',
                'status'      => 'active',
                'created_at'  => date('Y-m-d H:i:s'),
            ],
            [
                'state_id'    => 2,
                'name'        => 'Lower Dibang Valley',
                'status'      => 'active',
                'created_at'  => date('Y-m-d H:i:s'),
            ],
            [
                'state_id'    => 2,
                'name'        => 'Lower Subansiri',
                'status'      => 'active',
                'created_at'  => date('Y-m-d H:i:s'),
            ],
            [
                'state_id'    => 2,
                'name'        => 'Papum Pare',
                'status'      => 'active',
                'created_at'  => date('Y-m-d H:i:s'),
            ],
            [
                'state_id'    => 2,
                'name'        => 'Tawang',
                'status'      => 'active',
                'created_at'  => date('Y-m-d H:i:s'),
            ],
            [
                'state_id'    => 2,
                'name'        => 'Tirap',
                'status'      => 'active',
                'created_at'  => date('Y-m-d H:i:s'),
            ],
            [
                'state_id'    => 2,
                'name'        => 'Dibang Valley',
                'status'      => 'active',
                'created_at'  => date('Y-m-d H:i:s'),
            ],
            [
                'state_id'    => 2,
                'name'        => 'Upper Siang',
                'status'      => 'active',
                'created_at'  => date('Y-m-d H:i:s'),
            ],
            [
                'state_id'    => 2,
                'name'        => 'Upper Subansiri',
                'status'      => 'active',
                'created_at'  => date('Y-m-d H:i:s'),
            ],
            [
                'state_id'    => 2,
                'name'        => 'West Kameng',
                'status'      => 'active',
                'created_at'  => date('Y-m-d H:i:s'),
            ],
            [
                'state_id'    => 2,
                'name'        => 'West Siang',
                'status'      => 'active',
                'created_at'  => date('Y-m-d H:i:s'),
            ],
            // [
            //     'state_id'    => 3,
            //     'name'        => 'Adilabad',
            //     'status'      => 'active',
            //     'created_at'  => date('Y-m-d H:i:s'),
            // ],
        ]);
    }
}
