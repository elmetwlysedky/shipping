<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class ScannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('scanners')->delete();
        DB::table('scanners')->insert([
            'name' => 'scanner',
            'email' => 'scanner@gmail.com',
            'password' => Hash::make('12345678'),
        ]);
    }
}
