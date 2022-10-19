<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ParcelNote extends Model
{
    use HasFactory, Notifiable;
    use SoftDeletes;
    protected $guarded = [];

    protected $fillables = [
        'pl_id','disp_content', 'disp_condition','currrency_id','disp_price', 'disp_quantity',
         'disp_total','status'
        ];

    public function notes_with_currency(){

        return $this->belongsTo(Currency::class,'currency_id','id');
    }
}
