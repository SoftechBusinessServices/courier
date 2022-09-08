<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Company extends Model
{
    use HasFactory, Notifiable;
    use SoftDeletes;
    protected $guarded = [];

    protected $fillables = ['name','email', 'phone', 'address', 'country_id', 'ntn_no', 'web_url', 'status' ];

    public function customer()
    {
        return $this->hasMany(Customer::class, 'company_id', 'id');
    }
    public function country()
    {
        return $this->belongsTo(Country::class, 'country_id', 'id');
    }
}