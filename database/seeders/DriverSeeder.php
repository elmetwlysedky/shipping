<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class DriverSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
   public function run()
   {
       DB::table('drivers')->delete();
       DB::table('drivers')->insert([
           'name' => 'driver',
           'email' => 'driver@gmail.com',
           'password' => Hash::make('11111111'),
       ]);
   }
}
