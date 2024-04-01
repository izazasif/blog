<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin\User;
use DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
 
    	DB::table('users')->insert([[
            'id'        => 1,
    		'name'     => 'Admin',
    		'email'    => 'admin@gmail.com',
    		'password' => Hash::make('123')
            
    	]]);
    }
}
