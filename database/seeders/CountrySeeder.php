<?php

namespace Database\Seeders;

use App\Models\CountryTranslation;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Country;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('countries')->delete();
        $countries = [

            [
                'en'=> 'syria',
                'ar'=> 'سوريا'
            ],
            [
                'en'=> 'Eygpt',
                'ar'=> 'مصر'
            ],


        ];
        foreach($countries as $r) {
        Country::create(['country_name'=>$r]);
        }

    }


}
