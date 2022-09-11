<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ParcelRegistration extends Model
{
    use HasFactory, Notifiable;
    use SoftDeletes;
    protected $guarded = [];

    protected $fillables = [
        'pl_id', 'region_id', 'country_id', 'pl_weight', 'chargeable_weight', 'pl_cost', 'pl_currency', 'pl_extras',
        'pl_symbol', 'pl_discount',  'pl_final', 'pl_date', 'pl_discription',  'pl_status', 'status'
    ];

    public function country()
    {
        return $this->belongsTo(Country::class, 'country_id', 'id');
    }
    public function shipping()
    {
        return $this->belongsTo(ShippingCharge::class, 'region_id', 'id');
    }
    public function region()
    {
        return $this->belongsTo(Region::class, 'region_id', 'id');
    }
    public function currency()
    {
        return $this->belongsTo(Currency::class, 'currency_id', 'id');
    }
    
}