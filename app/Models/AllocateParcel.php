<?php

namespace App\Models;

use App\Models\Logistic;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AllocateParcel extends Model
{
    use HasFactory, Notifiable;
    use SoftDeletes;
    protected $guarded = [];

    protected $fillables = [
        'pl_id', 'service_id', 'vendor_id', 'status'
    ];

    public function country()
    {
        return $this->belongsTo(Country::class, 'country_id', 'id');
    }

    public function region()
    {
        return $this->belongsTo(Region::class, 'region_id', 'id');
    }
    public function service()
    {
        return $this->belongsTo(Service::class, 'service_id', 'id');
    }
    public function allocate()
    {
        return $this->hasMany(Parcel::class, 'pl_id', 'id');
    }
    public function allocate_logistic(){

        return $this->belongsTo(Logistic::class, 'vendor_id','id');
    }
}
