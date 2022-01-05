<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;


use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class ServiceType extends Model
{
    use HasTranslations;

    public $translatable = ['service_name'];
    protected $fillable=['service_name',];

}