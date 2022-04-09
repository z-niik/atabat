<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    use HasFactory;

    protected $fillable=[
    'name_start_day','start_day','type_going',
    'type_return','type_plan','type_code','price',
    'state','city','kargozar','group','execute_code',
    'execute_name','hotel_najaf','hotel_karbala',
    'hotel_kazemain','address','num_days',
    ];

}
