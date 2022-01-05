<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class WarehouseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('warehousing_officers')->delete();
        DB::table('warehousing_officers')->insert([
            'name' => 'warehouse',
            'email' => 'warehouse@gmail.com',
            'password' => Hash::make('12345678'),
        ]);
    }
}
