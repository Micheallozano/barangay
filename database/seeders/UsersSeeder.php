<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        date_default_timezone_set('Asia/Manila');
        
        DB::table('users')->insert([
            'id' => floor(time()-999999999),
            'name' => 'Cap. Baltazar Crescini',
            'barangay' => 'Zone 1',
            'usertype' => 'admin',
            'username' => 'captain-admin',
            'password' => Hash::make('admin'),
            'status' => '1',
            'image' => 'man.png',
            'created_at'=> now(),
		    'updated_at'=> now()
        ]);       
    }
}