<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Logistic extends Model
{
    use HasFactory, Notifiable;
    use SoftDeletes;
    protected $guarded = [];

    protected $fillables = ['logistic_name', 'vendor_email', 'vendor_phone', 'vendor_address', 'services','status'];

    public function logistic_service(){

        return $this->hasMany(Service::class,'id');
    }

}
