<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Customer extends Model
{
    use HasFactory, Notifiable;
    use SoftDeletes;
    protected $guarded = [];

    protected $fillables = ['company_id', 'name', 'email', 'phone', 'address', 'country_id', 'cnic_no', 'cnic_scane', 'status'];

    // public function company()
    // {
    //     return $this->belongsTo(Company::class, 'company_id', 'id');
    // }
    // public function country()
    // {
    //     return $this->belongsTo(Country::class, 'country_id', 'id');
    // }


}
