<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Series;

class SeriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('series')->delete();
        $bgs = ['ABC', 'DEF', 'JKL', 'MNU', 'XYZ', 'XKA', 'WEL', 'DER'];
        foreach($bgs as $bg ){
            Series::create(['prefix'=>$bg]);


        }
    }
}
