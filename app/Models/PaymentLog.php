<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PaymentLog extends Model
{
    protected $guarded  = [];
    use HasFactory,SoftDeletes;

    public function paymentlog_with_method(){

        return $this->belongsTo(PaymentMethod::class,'payment_method_id','id');
    }
    public function paymentlog_with_parcel(){
        
        return $this->belongsTo(Parcel::class,'vcid','id');

    }
}
