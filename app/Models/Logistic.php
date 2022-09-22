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

    protected $fillables = ['logistic_name', 'vendor_name', 'vendor_email', 'vendor_phone', 'vendor_address', 'country_id','status'];

    public function countries(){

        return $this->belongsTo(Country::class, 'country_id','id');
    }

}
