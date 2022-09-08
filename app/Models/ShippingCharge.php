<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ShippingCharge extends Model
{
    use HasFactory, Notifiable;
    use SoftDeletes;
    protected $guarded = [];

    protected $fillables = ['region_id', 'country_id', 'currency_id', 'symbol', '0_500g', '501_1000g', '1001_2000g', '2001_5000g', ' above_5000g', 'status'];

    public function region()
    {
        return $this->belongsTo(Region::class, 'region_id', 'id');
    }
    public function country()
    {
        return $this->belongsTo(Country::class, 'country_id', 'id');
    }
    public function parcel()
    {
        return $this->hasMany(ParcelRegistration::class, 'country_id', 'id');
    }
    public function currency()
    {
        return $this->belongsTo(Currency::class, 'currency_id', 'id');
    }
}