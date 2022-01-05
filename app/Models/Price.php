<?php

namespace App\Models;
use App\Models\ShippingMaterialType;
use App\Models\ServiceType;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    use HasFactory;
    protected $fillable=['material_type_id','service_type_id','distance','unit_id','wheight','price','currency_id'];


    public function shipping_material_types(){
        return $this->belongsTo(ShippingMaterialType::class,'material_type_id');
    }

    public function service_types(){
        return $this->belongsTo(ServiceType::class,'service_type_id');
    }


    public function currencies(){
        return $this->belongsTo(Curency::class,'currency_id');
    }

    public function units(){
        return $this->belongsTo(Unit::class,'unit_id');
    }
}
