<?php

namespace App\Models;
use Spatie\Translatable\HasTranslations;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrackingShipment extends Model
{
    use HasFactory;
    use HasTranslations;


    protected $fillable =['tracking_stage_id','customer_id','full_number',
        'outcomming_date','location_now','tracking_id','tracking_type'];
    public $translatable = ['desc'];

    public function customers(){
        return $this->belongsTo(Customer::class,'customer_id');
    }

    public function tracking_stages(){
        return $this->belongsTo(TrackingStage::class,'tracking_stage_id');
    }
    public function tranckable()
    {
        return $this->morphTo();
    }
}
