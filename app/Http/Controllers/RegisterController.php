<?php

namespace App\Http\Controllers;

use App\Http\Requests\AcceptRulesRequest;
use App\Http\Requests\RegisterRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Register;
use Illuminate\Support\Carbon;

class RegisterController extends Controller
{

    public function RegisterUser(RegisterRequest $request)
    {
        Carbon::setLocale('fa_IR');
        $date = Carbon::parse($request->birthday);
        Register::insert([
            'melli_code' => $request->melli_code,
            'phone' => $request->phone,
            'birthday' => $request->birthday,
            'state' => $request->state,
            // 'city' => $request->city,
            // 'period' => $request->period,
            'created_at' => Carbon::now()
        ]);
    }
}
