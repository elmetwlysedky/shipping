<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerTranslation extends Model
{
    use HasFactory;

    protected $fillable = ['sender_full_name', 'sender_mother_name','reciver_full_name','reciver_mother_name',

    ];
    public $timestamps = false;
}
