<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
class SWelcomeTitle extends Model
{
    use HasFactory;
    use HasTranslations ;
    public $translatable = ['title_p' , 'title_h' , 'title_span'];
    protected $table = 's_welcome_titles';
    protected $fillable = [
        'title_p',
        'title_h' ,
        'title_span'];
}
