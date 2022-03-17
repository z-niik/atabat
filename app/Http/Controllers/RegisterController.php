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
use App\Http\Controllers\SmsController;
use APP\Models\Sms;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Throwable;

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

        $teammate=$request->teammate;
        if($teammate)
        {

        $teamcount=count($teammate);
        for($i=0;$i<$teamcount;$i++)
             {
            //  dd($teammate[$i]);
             if(fmod($i,2)==0)
                {
                 $teammate[$i]=$teammate[$i];
                }else{
                $teammate[$i]=$this->ArtoEnNumeric($teammate[$i]);
                 }
             }
        }
        $yourstate=State::find($request->state);
        try{
        $userdata=([
            'melli_code' => $request->melli_code,
            'phone' => $request->phone,
            'birthdaty' => $date,
            'state_id' => $request->state,
            'periodplane' => $periods,
            'priceplane' => $prices,
            'teammate' => $teammate,
        ]);
        return view('confirmform' , compact('userdata','yourstate'));
    }
        catch(Throwable $e){
           return back()->withErrors($e->getMessage());
     }

    }

    public function ReCheckForm($data){
        return view('recheckform' , compact('data'));
    }
    public function StoreUser(Request $requset){


        $userdata=json_decode(base64_decode($requset->userdata));
        // try{
             $user=User::create([
                'melli_code' => $userdata->melli_code,
                'phone' => $userdata->phone,
                'birthdaty' => $userdata->birthdaty,
                'password' => bcrypt($userdata->melli_code),
                'created_at' => Carbon::now(),
             ]);
            $register=Register::create([
                'user_id'=> $user->id,
                'state_id' => $userdata->state_id,
                'periodplane' => json_encode($userdata->periodplane),
                'priceplane' => json_encode($userdata->priceplane),
                'teammate' => json_encode($userdata->teammate),
            ]);
            if($user && $register){
                $id=$user->id;
                $phone_number=$user->phone;
                $sendsms=new SmsController;
                $sendsms->SendSms( $phone_number, $id);
                 return view('confirmcode' , compact('phone_number','id'));
                //return Redirect()->url('confirm/sms/'.$phone_number.'/'.$id);
            }
        // }catch(Throwable $e){
            // return back()->withErrors($e->getMessage());
        }
    // }
    public function ConfirmForm()
    {

    }

}
