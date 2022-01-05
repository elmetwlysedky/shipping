<?php

namespace App\Models;
use App\Models\Shipment;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShipmentAttachment extends Model
{
    use HasFactory;
    protected $fillable=['file_name','shipment_id'];


    public function shipments(){
        return $this->belongsTo(Shipment::class,'shipment_id');
    }
}
