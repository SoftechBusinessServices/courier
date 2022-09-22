<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CompanyRepresentative extends Model
{
    use HasFactory, Notifiable;
    use SoftDeletes;
    protected $guarded = [];

    protected $fillables = ['represent_name','represent_email', 'represent_phone', 'represent_address', 'company_id','status' ];

    public function companies(){

        return $this->belongsTo(Company::class, 'company_id','id');
    }
}
