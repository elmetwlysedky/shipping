<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;


use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Curency extends Model
{
    use HasTranslations;

    public $translatable = ['curency_name'];

}

