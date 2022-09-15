<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Region extends Model
{
    use HasFactory, Notifiable;
    use SoftDeletes;
    protected $guarded = [];

    protected $fillables = ['name','status'];

    public function shipping()
    {
        return $this->hasOne(ShippingCharge::class, 'region_id', 'id');
    }
    public function country()
    {
        return $this->hasMany(Country::class, 'region_id', 'id');
    }
    public function parcel()
    {
        return $this->hasMany(ParcelRegistration::class, 'region_id', 'id');
    }
}
