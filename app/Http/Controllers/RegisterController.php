<?php

namespace App\Http\Controllers;

use App\Http\Requests\AcceptRulesRequest;
use App\Http\Requests\RegisterRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Register;
use Illuminate\Support\Carbon;
use App\Models\State;
use App\Models\PeriodPlane;
use App\Models\PricePlane;
use App\Models\User;
class RegisterController extends Controller
{

    public function ArtoEnNumeric($string) {
        return strtr($string, array('۰'=>'0', '۱'=>'1', '۲'=>'2', '۳'=>'3', '۴'=>'4', '۵'=>'5', '۶'=>'6', '۷'=>'7', '۸'=>'8', '۹'=>'9', '٠'=>'0', '١'=>'1', '٢'=>'2', '٣'=>'3', '٤'=>'4', '٥'=>'5', '٦'=>'6', '٧'=>'7', '٨'=>'8', '٩'=>'9'));
    }

    public function RegisterFrom()
    {
            if(!isset($_GET['accept-rules'])){
            return Redirect()->back()->with('error','لطفا شرایط و قوانین را مطالعه نموده و تایید نمایید.');
            }else{
            $periods=PeriodPlane::all();
            $prices=PricePlane::all();
            $states=State::all();
            return view('register' , compact('periods','states','prices'));
            }
    }

    public function RegisterUser(RegisterRequest $request)
    {

        $date=$this->ArtoEnNumeric($request->birthday);
        $periods=$request->period;
        $prices=$request->price;

        $umellicode=$request->mellicode;
        $userbirthday=$request->ubirthday;
        foreach($userbirthday as $ubirthday){
            $ubirthday=$this->ArtoEnNumeric($ubirthday);
        }
        if($umellicode && $ubirthday)
        {
            $teammate=[$umellicode,$ubirthday];
        }
        else{
            $teammate=1;

        }

            $user=User::create([
            'melli_code' => $request->melli_code,
            'phone' => $request->phone,
            'birthdaty' => $date,
            'created_at' => Carbon::now()
        ]);
        $register=Register::create([
            'user_id'=> $user->id,
            'state_id' => $request->state,
            'periodplane' => json_encode($periods),
            'priceplane' => json_encode($prices),
            'teammate' => json_encode($teammate),
        ]);

        $yourstate=State::find($request->state);
        return view('confirmform' , compact('user','register','yourstate','prices','periods','ubirthday','umellicode'));

    }

    public function ConfirmForm()
    {

    }

}
