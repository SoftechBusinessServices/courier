<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use PHPUnit\Framework\Constraint\Count;

class ParcelConsignee extends Model
{
    use HasFactory, Notifiable;
    use SoftDeletes;
    protected $guarded = [];

    protected $fillables = [
        'pl_id','consignee_name', 'consignee_phone','consignee_business', 'consignee_country_id',
         'consignee_state', 'consignee_city', 'consignee_zip','consignee_address1','consignee_address2', 'status'
    ];

    public function consignee_with_country(){

        return  $this->belongsTo(Country::class,'consignee_country_id','id');
    }

    // public function consignee_country(){

    //     return  $this->belongsTo(Country::class,'consignee_country_id','id');
    // }
    // public function parcel(){

    //     return $this->belongsTo(Parcel::class, 'pl_id','id');
    // }
}
