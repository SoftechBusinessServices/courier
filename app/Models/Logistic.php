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

    protected $fillables = ['company_id', 'vendor_email', 'vendor_phone', 'vendor_address', 'service_id','status'];

    public function logistic_with_company(){

        return $this->belongsTo(Company::class,'company_id','id');
       } 

    public function logistic_with_service()
    {
        return $this->belongsTo(Service::class, 'service_id', 'id');
    }
    // public function logistic_allocate(){

    //     return $this->hasMany(AllocateParcel::class,'vendor_id','id');
    // }
 
}
