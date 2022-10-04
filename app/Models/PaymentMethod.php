<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PaymentMethod extends Model
{

     use HasFactory, Notifiable;
     use SoftDeletes;
     protected $guarded = [];

     protected $fillables = ['payment_method','status'];


}
