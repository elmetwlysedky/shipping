<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\TrackingStage;

class TrackingStageSeeder extends Seeder
{
    public function run()
    {
        DB::table('tracking_stages')->delete();
        $stages = [

            [
                'en'=> 'waiting to initial approve',
                'ar'=> 'إنتظار للحصول على الموافقة المبدئية'
            ],
            [
                'en'=> 'getting initial approve',
                'ar'=> ' الحصول على الموافقة المبدئية'
            ],
            [
                'en'=> 'scaning parcel for  final approve',
                'ar'=> ' مسح الطرد للحصول على الموافقة النهائية للشحن'
            ],
            [
                'en'=> ' transmit stage',
                'ar'=> ' مرحلة النقل'
            ],
            [
                'en'=> 'repository stage ',
                'ar'=> 'مرحلة التخزين'
            ],
            [
                'en'=> 'delivery stage ',
                'ar'=> 'مرحلة التسليم'
            ],


        ];
        foreach($stages as $r) {
            TrackingStage::create(['stage_name'=>$r]);
        }

    }
}