<?php

namespace Database\Seeders;

use App\Models\ShippingMaterialType;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;




class ShippingMaterialTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shipping_material_types')->delete();
        $shipping_material_types = [

            [
                'en'=> 'furniture',
                'ar'=> 'أثاث'
            ],
            [
                'en'=> 'liquid food',
                'ar'=> 'مواد غذائية سائلة'
            ],
         [
             'en'=> 'dry food',
             'ar'=> 'مواد غذائية جافة'
         ],
            [
                'en'=> 'flammable material',
                'ar'=> 'مواد قابلة للاشتعال'
            ],
        [
            'en'=> 'Building material',
            'ar'=> 'مواد  بناء'
        ],
            [
                'en'=> 'Agricultural materials',
                'ar'=> 'مواد زراعية  '
            ],
        [
            'en'=> 'industrial materials',
            'ar'=> 'مواد صناعية  '
        ],



        ];
        foreach($shipping_material_types as $r) {
            ShippingMaterialType::create(['material_type'=>$r]);
        }

    }
}
