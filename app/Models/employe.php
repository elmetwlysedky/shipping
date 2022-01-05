<?php

namespace App\Models;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
class employe extends Model
{


    use HasFactory;
    use HasTranslations ;
    public $translatable = ['name' , 'Country' , 'details','city'];
      protected $fillable =
       [
        'name',
        'Country',
        'details',
        'city',
        'birth_date',
        'phone',
        'email',
        'is_active',
        'img_url'
        ];


    protected $appends = ['age']; // return just age in column >  birth_date

    //get Years employe 
    public function getAgeAttribute(){

        return Carbon::parse(Carbon::now())->diffInYears($this->birth_date);
        
    }
}
