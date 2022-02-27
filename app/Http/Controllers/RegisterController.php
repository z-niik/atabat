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
    public function AcceptRules(AcceptRulesRequest $request)
    {

        $provinces=DB::table('provinces')->get();
        return view('register' , compact('provinces'));
    }
    public function RegisterUser(RegisterRequest $request)
    {
        Register::insert([
            'melli_code' => $request->melli_code,
            'phone' => $request->phone,
            'birthday' => $request->birthday,
            'state' => $request->state,
            // 'city' => $request->city,
            'period' => $request->period,
            'created_at' => Carbon::now()
        ]);
    }
}
