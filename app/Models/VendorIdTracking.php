<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class VendorIdTracking extends Model
{
    use HasFactory, Notifiable;
    use SoftDeletes;
    protected $guarded = [];

    protected $fillables = [
        'pl_id', 'vendor_tracking_id','status'
    ];
    public function tracking_parcel(){

        return $this->hasMany(Parcel::class,'pl_id','id');
    }
    public function tracking_with_allocate_parcel(){

        return $this->belongsTo(AllocateParcel::class,'vendor_id','id');
    }
}
