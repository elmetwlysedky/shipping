<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

      class PriceOrder extends Model
{
    use HasFactory , Notifiable;
    protected $fillable = ['name', 'email', 'address','kind','message','is_read'];
}
