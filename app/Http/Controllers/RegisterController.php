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
use App\Models\Tour;

class RegisterController extends Controller
{

    public function ArtoEnNumeric($string) {
        return strtr($string, array('۰'=>'0', '۱'=>'1', '۲'=>'2', '۳'=>'3', '۴'=>'4', '۵'=>'5', '۶'=>'6', '۷'=>'7', '۸'=>'8', '۹'=>'9', '٠'=>'0', '١'=>'1', '٢'=>'2', '٣'=>'3', '٤'=>'4', '٥'=>'5', '٦'=>'6', '٧'=>'7', '٨'=>'8', '٩'=>'9'));
    }

    public function RegisterFrom($id)
    {
            $tour=Tour::where('id' , $id)->first();
            // $periods=PeriodPlane::all();
            // $prices=PricePlane::all();
            // $states=State::all();
            return view('register' , compact('tour'));

    }

    public function RegisterUser(RegisterRequest $request)
    {

        $date=$this->ArtoEnNumeric($request->birthday);
        // $periods=$request->period;
        // $prices=$request->price;

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
        // print_r($teammate);
        // $yourstate=State::find($request->state);
        // echo $yourstate;
        // // try{
        $userdata=([
            'melli_code' => $request->melli_code,
            'phone' => $request->phone,
            'birthdaty' => $date,
            'teammate' => $teammate,
            'tour_id' => $request->tour_id,
        ]);
        $tour=Tour::where('id', $request->tour_id)->first();
        return view('confirmform' , compact('userdata','tour'));
    // // }
    //     // catch(Throwable $e){
    //     //    return back()->withErrors($e->getMessage());
    // //  }

    }



    public function ReCheckForm($data , $id){
        $data=json_decode(base64_decode($data));
        // $userstate=state::find($data->state_id);
        // $states=State::all();
        $tour=Tour::where('id' , $id)->first();
        return view('recheckform' , compact('data','tour'));
    }


    public function StoreUser(Request $requset){


        $userdata=json_decode(base64_decode($requset->userdata));

        $repeat_user=User::where('melli_code',$userdata->melli_code);
        // dd($repeat_user);
        if($repeat_user ==Null){

            $user=User::where('melli_code',$userdata->melli_code)->update([
                'melli_code' => $userdata->melli_code,
                'phone' => $userdata->phone,
                'birthdaty' => $userdata->birthdaty,
                'password' => bcrypt($userdata->melli_code),
             ]);
            $userid=User::where('melli_code',$userdata->melli_code)->first();
            $user_id=$userid->id;
            $phone=$userid->phone;
            $mellicode=$userid->melli_code;
            $register=Register::where('user_id',$user_id)->update([
                'user_id'=> $user_id,
                'teammate' => json_encode($userdata->teammate),
                'tour_id' => $requset->tour_id,
            ]);

        }else{
        //  try{
            $user=User::create([
                'melli_code' => $userdata->melli_code,
                'phone' => $userdata->phone,
                'birthdaty' => $userdata->birthdaty,
                'password' => bcrypt($userdata->melli_code),
                'created_at' => Carbon::now(),
             ]);
             $user_id=$user->id;
             $phone=$user->phone;
             $mellicode=$user->melli_code;
            $register=Register::create([
                'user_id'=> $user->id,
                'teammate' => json_encode($userdata->teammate),
                'tour_id' => $requset->tour_id,
            ]);
        }
            if($user && $register){
                $id=$user_id;
                $phone_number=$phone;
                $pid='5gfzx1bpi2';
                $sendsms=new SmsController;
                $sendsms->SendSms( $phone_number, $id,$pid);

                // $pid2='yn8s4spa2n';
                // $sendadminsms=new SmsController;
                // $sendadminsms->SendAdminSms( $mellicode, $id,$pid2);
                 return view('confirmcode' , compact('phone_number','id'));
        //         // return Redirect()->url('confirm/sms/'.$phone_number.'/'.$id);
            }

        //  }catch(Throwable $e){
        //      return back()->withErrors($e->getMessage());
        // }
     }
    public function ConfirmForm()
    {

    }

}
