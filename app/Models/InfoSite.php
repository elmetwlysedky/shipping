<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class InfoSite extends Model
{
    use HasFactory;
    use HasTranslations;

    public $translatable = ['title', 'day'];

    protected $fillable= [
        'title',
        'email',
        'logo',
        'phone',
        'day',
        'open_time',
        'close_time',
        'facebook_url',
        'twitter_url',
        'linkedin_url',
    ];

    public static function rule()
    {
        return [
            'en_title' => 'required|min:3',
            'ar_title' => 'required|min:3',
            'phone' =>  'required|min:10',
            'email' => 'required|email',
            'ar_day' => 'required|min:3',
            'en_day' => 'required|min:3',
            'open_time' => 'required',
            'close_time' => 'required',
            'facebook_url' => 'required|url',
            'twitter_url' => 'required|url',
            'linkedin_url' => 'required|url'
        ];
    }
}
