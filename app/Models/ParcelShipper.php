<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ParcelShipper extends Model
{
    use HasFactory, Notifiable;
    use SoftDeletes;
    protected $guarded = [];

    protected $fillables = [
        'pl_id','pl_date', 'pl_phone_id','company_name','shipper_phone', 'shipper_country_id',
         'shipper_state', 'shipper_city', 'shipper_zip','shipper_address1','shipper_address2', 'status'
    ];

    
}
