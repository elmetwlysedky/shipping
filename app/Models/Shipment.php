<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;


class Shipment extends Model
{
    use HasTranslations;

    public $translatable = ['shipment_name'];


    // 3. To define which attributes needs to be translated
//    public $translatedAttributes = ['shipment_name',];
    protected $fillable = ['amount', 'unit_id','whieght','price','address_address','address_longitude',
                           'address_latitude','sender_date','expected_recived_date',
                           'currency_id', 'tracking_stage_id','service_type_id','type_id','costumer_id','shipment_name'];



      public function customers(){
        return $this->belongsTo(Customer::class,'costumer_id');

                 }
    public function tracking_stages(){
        return $this->belongsTo(TrackingStage::class,'tracking_stage_id');

                  }

    public function currencies(){
        return $this->belongsTo(Curency::class,'currency_id');

    }

    public function service_types(){
        return $this->belongsTo(ServiceType::class,'service_type_id');

    }

    public function units(){
        return $this->belongsTo(Unit::class,'unit_id');

    }

    public function material_types(){
        return $this->belongsTo(ShippingMaterialType::class,'type_id');

    }


}
