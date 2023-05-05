<?php

namespace Database\Seeders;

use App\Models\State;
use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        State::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        State::insert([
            [
                'country_code'   => 'IN',
                'state_code'     => 'AP',
                'name'           => 'Andhra Pradesh',
                'status'         => 'active',
                'created_at'     => date('Y-m-d H:i:s'),
            ],
            [
                'country_code'   => 'IN',
                'state_code'     => 'AR',
                'name'           => 'Arunachal Pradesh',
                'status'         => 'active',
                'created_at'  => date('Y-m-d H:i:s'),
            ],
            [
                'country_code'   => 'IN',
                'state_code'     => 'AS',
                'name'           => 'Assam',
                'status'         => 'active',
                'created_at'  => date('Y-m-d H:i:s'),
            ],
            [
                'country_code'   => 'IN',
                'state_code'     => 'BR',
                'name'           => 'Bihar',
                'status'         => 'active',
                'created_at'  => date('Y-m-d H:i:s'),
            ],
            [
                'country_code'   => 'IN',
                'state_code'     => 'CG',
                'name'           => 'Chhattisgarh',
                'status'         => 'active',
                'created_at'  => date('Y-m-d H:i:s'),
            ],
            [
                'country_code'   => 'IN',
                'state_code'     => 'DN',
                'name'           => 'Dadra and Nagar Haveli',
                'status'         => 'active',
                'created_at'  => date('Y-m-d H:i:s'),
            ],
            [
                'country_code'   => 'IN',
                'state_code'     => 'DD',
                'name'           => 'Daman and Diu',
                'status'         => 'active',
                'created_at'  => date('Y-m-d H:i:s'),
            ],
            [
                'country_code'   => 'IN',
                'state_code'     => 'DL',
                'name'           => 'Delhi',
                'status'         => 'active',
                'created_at'  => date('Y-m-d H:i:s'),
            ],
            [
                'country_code'   => 'IN',
                'state_code'     => 'GA',
                'name'           => 'Goa',
                'status'         => 'active',
                'created_at'  => date('Y-m-d H:i:s'),
            ],
            [
                'country_code'   => 'IN',
                'state_code'     => 'GJ',
                'name'           => 'Gujarat',
                'status'         => 'active',
                'created_at'  => date('Y-m-d H:i:s'),
            ],
            [
                'country_code'   => 'IN',
                'state_code'     => 'HR',
                'name'           => 'Haryana',
                'status'         => 'active',
                'created_at'  => date('Y-m-d H:i:s'),
            ],
            [
                'country_code'   => 'IN',
                'state_code'     => 'HP',
                'name'           => 'Himachal Pradesh',
                'status'         => 'active',
                'created_at'  => date('Y-m-d H:i:s'),
            ],
            [
                'country_code'   => 'IN',
                'state_code'     => 'JK',
                'name'           => 'Jammu and Kashmir',
                'status'         => 'active',
                'created_at'  => date('Y-m-d H:i:s'),
            ],
            [
                'country_code'   => 'IN',
                'state_code'     => 'JH',
                'name'           => 'Jharkhand',
                'status'         => 'active',
                'created_at'  => date('Y-m-d H:i:s'),
            ],
            [
                'country_code'   => 'IN',
                'state_code'     => 'KA',
                'name'           => 'Karnataka',
                'status'         => 'active',
                'created_at'  => date('Y-m-d H:i:s'),
            ],
            [
                'country_code'   => 'IN',
                'state_code'     => 'KL',
                'name'           => 'Kerala',
                'status'         => 'active',
                'created_at'  => date('Y-m-d H:i:s'),
            ],
            [
                'country_code'   => 'IN',
                'state_code'     => 'MP',
                'name'           => 'Madhya Pradesh',
                'status'         => 'active',
                'created_at'  => date('Y-m-d H:i:s'),
            ],
            [
                'country_code'   => 'IN',
                'state_code'     => 'MH',
                'name'           => 'Maharashtra',
                'status'         => 'active',
                'created_at'  => date('Y-m-d H:i:s'),
            ],
            [
                'country_code'   => 'IN',
                'state_code'     => 'MN',
                'name'           => 'Manipur',
                'status'         => 'active',
                'created_at'  => date('Y-m-d H:i:s'),
            ],
            [
                'country_code'   => 'IN',
                'state_code'     => 'ML',
                'name'           => 'Meghalaya',
                'status'         => 'active',
                'created_at'  => date('Y-m-d H:i:s'),
            ],
            [
                'country_code'   => 'IN',
                'state_code'     => 'MZ',
                'name'           => 'Mizoram',
                'status'         => 'active',
                'created_at'  => date('Y-m-d H:i:s'),
            ],
            [
                'country_code'   => 'IN',
                'state_code'     => 'NL',
                'name'           => 'Nagaland',
                'status'         => 'active',
                'created_at'  => date('Y-m-d H:i:s'),
            ],
            [
                'country_code'   => 'IN',
                'state_code'     => 'OR',
                'name'           => 'Orissa',
                'status'         => 'active',
                'created_at'  => date('Y-m-d H:i:s'),
            ],
            [
                'country_code'   => 'IN',
                'state_code'     => 'PY',
                'name'           => 'Pondicherry',
                'status'         => 'active',
                'created_at'  => date('Y-m-d H:i:s'),
            ],
            [
                'country_code'   => 'IN',
                'state_code'     => 'PB',
                'name'           => 'Punjab',
                'status'         => 'active',
                'created_at'  => date('Y-m-d H:i:s'),
            ],
            [
                'country_code'   => 'IN',
                'state_code'     => 'RJ',
                'name'           => 'Rajasthan',
                'status'         => 'active',
                'created_at'  => date('Y-m-d H:i:s'),
            ],
            [
                'country_code'   => 'IN',
                'state_code'     => 'SK',
                'name'           => 'Sikkim',
                'status'         => 'active',
                'created_at'  => date('Y-m-d H:i:s'),
            ],
            [
                'country_code'   => 'IN',
                'state_code'     => 'TN',
                'name'           => 'Tamil Nadu',
                'status'         => 'active',
                'created_at'  => date('Y-m-d H:i:s'),
            ],
            [
                'country_code'   => 'IN',
                'state_code'     => 'TR',
                'name'           => 'Tripura',
                'status'         => 'active',
                'created_at'  => date('Y-m-d H:i:s'),
            ],
            [
                'country_code'   => 'IN',
                'state_code'     => 'UP',
                'name'           => 'Uttar Pradesh',
                'status'         => 'active',
                'created_at'  => date('Y-m-d H:i:s'),
            ],
            [
                'country_code'   => 'IN',
                'state_code'     => 'UK',
                'name'           => 'Uttarakhand',
                'status'         => 'active',
                'created_at'  => date('Y-m-d H:i:s'),
            ],
            [
                'country_code'   => 'IN',
                'state_code'     => 'WB',
                'name'           => 'West Bengal',
                'status'         => 'active',
                'created_at'  => date('Y-m-d H:i:s'),
            ],
        ]);
    }
}
