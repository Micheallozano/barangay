<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class SectorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        date_default_timezone_set('Asia/Manila');

        DB::table('sectors')->insert([
            'id' => '20220001',
            'sector' => 'FAMILY HEAD',
            'created_at'=> now(),
		    'updated_at'=> now()
        ]);

        DB::table('sectors')->insert([
            'id' => '20220002',
            'sector' => 'HOUSEHOLD HEAD',
            'created_at'=> now(),
		    'updated_at'=> now()
        ]);

        DB::table('sectors')->insert([
            'sector' => 'FARMER',
            'created_at'=> now(),
		    'updated_at'=> now()
        ]);

        DB::table('sectors')->insert([
            'sector' => 'RSBSA FARMER',
            'created_at'=> now(),
            'updated_at'=> now()
        ]);

        DB::table('sectors')->insert([
            'id' => '20220005',
            'sector' => 'OFW',
            'created_at'=> now(),
		    'updated_at'=> now()
        ]);

        DB::table('sectors')->insert([
            'sector' => 'OUT OF SCHOOL YOUTH',
            'created_at'=> now(),
		    'updated_at'=> now()
        ]);

        DB::table('sectors')->insert([
            'sector' => 'PWD',
            'created_at'=> now(),
		    'updated_at'=> now()
        ]);

        DB::table('sectors')->insert([
            'sector' => 'SENIOR CITIZEN',
            'created_at'=> now(),
		    'updated_at'=> now()
        ]);

        DB::table('sectors')->insert([
            'sector' => 'SOLO PARENT',
            'created_at'=> now(),
		    'updated_at'=> now()
        ]);

        DB::table('sectors')->insert([
            'sector' => '4Ps',
            'created_at'=> now(),
		    'updated_at'=> now()
        ]);
    
        DB::table('sectors')->insert([
            'sector' => 'BUSINESS OWNER',
            'created_at'=> now(),
            'updated_at'=> now()
        ]);

        DB::table('sectors')->insert([
            'sector' => 'CHILDREN',
            'created_at'=> now(),
            'updated_at'=> now()
        ]);

        DB::table('sectors')->insert([
            'sector' => 'TEENAGER',
            'created_at'=> now(),
            'updated_at'=> now()
        ]);

        DB::table('sectors')->insert([
            'sector' => 'ADULT',
            'created_at'=> now(),
            'updated_at'=> now()
        ]);

        DB::table('sectors')->insert([
            'sector' => 'CAT OWNER',
            'created_at'=> now(),
            'updated_at'=> now()
        ]);

        DB::table('sectors')->insert([
            'sector' => 'DOG OWNER',
            'created_at'=> now(),
            'updated_at'=> now()
        ]);

        DB::table('sectors')->insert([
            'sector' => 'OTHER ANIMAL',
            'created_at'=> now(),
            'updated_at'=> now()
        ]);

        DB::table('sectors')->insert([
            'sector' => 'FLOODED AREA',
            'created_at'=> now(),
            'updated_at'=> now()
        ]);

        DB::table('sectors')->insert([
            'sector' => 'CARPENTER',
            'created_at'=> now(),
            'updated_at'=> now()
        ]);

        DB::table('sectors')->insert([
            'sector' => 'TUBERO',
            'created_at'=> now(),
            'updated_at'=> now()
        ]);

     
    }
}