<?php

namespace App\Models;

use App\Notifications\Add_contact;
use App\Notifications\Add_shipment;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'subject',
        'message'
    ];


}
