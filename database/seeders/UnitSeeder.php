<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Unit;

class UnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('units')->delete();
        $units = [

            [
                'en'=> 'KG',
                'ar'=> 'كيلو غرام'
            ],
            [
                'en'=> 'TON',
                'ar'=> 'طن'
            ],
            [
                'en'=> 'Gram',
                'ar'=> ' غرام'
            ],


        ];
        foreach($units as $r) {
            Unit::create(['unit_name'=>$r]);
        }

    }
}
