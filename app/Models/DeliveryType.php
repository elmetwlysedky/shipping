<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
class DeliveryType extends Model
{
 
    use HasFactory;

    use HasTranslations ;
    public $translatable = ['name' , 'details' , 'title_main','title_sup'];
    protected $fillable = [
        'name',
        
        'details',
        
        'icon_url',
        'img_url',
        'title_main',
        
        'title_sup'
           
    ];
}
