<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Register extends Model
{
    use HasFactory;
    protected $fillable = ['user_id','state_id','priceplane','periodplane','teammate'];

    public function state()
    {
            return $this->belongsTo(State::class, 'state_id');

    }
    public function user(){
        return $this->belongsTo(PeriodPlane::class , 'user_id');
    }

}
