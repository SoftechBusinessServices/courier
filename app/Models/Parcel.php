<?php

namespace App\Models;

use Faker\Provider\ar_SA\Payment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Parcel extends Model
{
    use HasFactory, Notifiable;
    use SoftDeletes;
    protected $guarded = [];
    protected $casts = ['pl_description' => 'array'];

    protected $fillables = [
         'parcel_id','pl_boxes', 'service_id', 'pl_weight', 'pl_charges', 'pl_extras',
        'pl_discount', 'pl_final', 'pl_description', 'pl_status','payment_id', 'status'
    ];

    public function parcel_with_shipper(){

        return $this->belongsTo(ParcelShipper::class,'shipper_id','id');
    }
    public function parcel_with_consignee(){

        return $this->belongsTo(ParcelConsignee::class,'consignee_id','id');
    }
    public function parcel_with_service(){

        return $this->belongsTo(Service::class,'service_id','id');
    }
    public function parcel_with_payment(){

        return $this->belongsTo(PaymentMethod::class,'payment_id','id');
    }
    public function parcel_with_notes(){

        return $this->hasMany(ParcelNote::class, 'pl_id','id');
    }

    public function parcel_with_tracking(){

        return $this->hasOne(VendorIdTracking::class,'pl_id','id');
    }

    public function parcel_with_charges(){

        return $this->hasOne(VendorCharges::class,'pl_id','id');
    }

    public function parcel_with_allocate()
    {
        return $this->hasMany(AllocateParcel::class,'pl_id','id');
    }
    
    // public function country()
    // {
    //     return $this->belongsTo(Country::class,'consignee_country_id','id');
    // }
    // public function country_shipper()
    // {
    //     return $this->belongsTo(Country::class, 'shipper_country_id', 'id');
    // }
    // public function region()
    // {
    //     return $this->belongsTo(Region::class, 'region_id', 'id');
    // }
    // public function service()
    // {
    //     return $this->belongsTo(Service::class, 'service_id', 'id');
    // }

    
    // // public function consignee(){

    // //     return $this->belongsToMany(Parcel::class,'consignee_id','id');
    // // }
    // public function shipper(){

    //     return $this->hasOne(ParcelShipper::class,'pl_id','id');
    // }
    // public function parcel_service(){

    //     return $this->belongsTo(Service::class, 'service_id','id');
    // }
   
    // public function parcel_consignee(){

    //     return $this->belongsTo(Country::class,'consignee_country_id','id');
    // }
   
    // public function parcel_payment_method(){

    //     return $this->belongsTo(PaymentMethod::class,'payment_id','id');
    // }
    // public function parcel_shipper(){

    //     return $this->belongsTo(Country::class,'shipper_country_id','id');
    // }
    // public function parcel_currency(){

    //     return $this->belongsTo(Country::class,'shipper_country_id','id');
    // }
    // public function parcel_shipper_details(){

    //     return $this->hasMany(ParcelShipper::class,'pl_id','id');
    // }
    // public function parcel_allocate(){

    //     return $this->hasMany(AllocateParcel::class,'pl_id','id');
    // }
}
