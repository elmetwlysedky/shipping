<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Spatie\Translatable\HasTranslations;


class TrackingStage extends Model
{
    use HasFactory;
    use HasTranslations;
    public $translatable = ['stage_name'];
    protected $fillable =['desc'];


}
