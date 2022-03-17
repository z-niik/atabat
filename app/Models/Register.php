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
        return $this->hasOne(State::class, 'id', 'state_id');

    }

    public function user(){
        return $this->hasOne(User::class , 'id', 'user_id');
    }


}
