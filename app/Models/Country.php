<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Country extends Model
{
    use HasFactory, Notifiable;
    use SoftDeletes;
    protected $guarded = [];

    protected $fillable = ['region_id', 'name', 'code'];

    public function parcel()
    {
        return $this->hasMany(ParcelRegistration::class, 'country_id', 'id');
    }
    public function company()
    {
        return $this->hasMany(Company::class, 'country_id', 'id');
    }
    public function customer()
    {
        return $this->hasMany(Customer::class, 'country_id', 'id');
    }
    public function shipping()
    {
        return $this->hasMany(ShippingCharge::class, 'country_id', 'id');
    }
    public function region()
    {
        return $this->belongsTo(Region::class, 'region_id', 'id');
    }
    public function posts()
    {
        return $this->hasManyThrough(Country::class, ShippingCharge::class, 'id', 'region_id');
    }
}