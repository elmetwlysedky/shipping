<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Convention extends Model
{
    use HasFactory;
    use HasTranslations;
    public $translatable = ['title','content'];
    protected $fillable = [
        'title',
        'content',
        'customer',
        'company',
        'photo'
    ];
}
