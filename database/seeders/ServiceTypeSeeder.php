<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\ServiceType;

class ServiceTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */


    public function run()
    {
        DB::table('service_types')->delete();
        $services = [

            [
                'en'=> 'hiegh services',
                'ar'=> 'خدمات عالية المستوى'
            ],
            [
                'en'=> 'mediem ',
                'ar'=> 'حدمات متوسطة'
            ],
            [
                'en'=> 'normal ',
                'ar'=> 'خدمات عادية'
            ],


        ];

          foreach($services as $r) {
              ServiceType::create(['service_name'=>$r]);
          }

    }



};



