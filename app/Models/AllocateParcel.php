<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AllocateParcel extends Model
{
    use HasFactory, Notifiable;
    use SoftDeletes;
    protected $guarded = [];

    protected $fillables = [
        'pl_id','vendor_id', 'vendor_tracking_id','vendor_tracking_charges','status'
    ];

    public function country()
    {
        return $this->belongsTo(Country::class, 'country_id', 'id');
    }
    // public function shipping()
    // {
    //     return $this->belongsTo(ShippingCharge::class, 'region_id', 'id');
    // }
    public function region()
    {
        return $this->belongsTo(Region::class, 'region_id', 'id');
    }
    public function service()
    {
        return $this->belongsTo(Service::class, 'service_id', 'id');
    }

}
