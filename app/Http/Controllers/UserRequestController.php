<?php

namespace App\Http\Controllers;

use App\Http\Requests\ConfirmInfoRequest;
use App\Models\Register;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\State;
use App\Models\Confirm;
use Exception;
use Throwable;
use Illuminate\Support\Carbon;

class UserRequestController extends Controller
{

    public function ShowRequest(){
        $users=User::all();
        // dd($users);
        $registers=Register::with('state')->get();
        //  dd($registers->state->name);
        // return $registers;

        $allarray=json_decode($registers);
        // return $allarray['state']['name'];
        if ($allarray) {
            $prices = [];
            $periods= [];
            $teammates= [];
            foreach($allarray as $data)
            {
                array_push($prices, $data->priceplane);
                array_push($periods, $data->periodplane);
                array_push($teammates, $data->teammate);
            }
        }

        // return json_encode($array);

        // print_r($prices);
        // $prices=json_decode($registers->priceplane);

        // $periods=json_decode($registers->periodplane);
        // $teammates=$registers->teammate;
        // dd($teammates);
        $confirm=Confirm::all();
        // $state = $registers->state->name;
        return view('admin.userrequest.index' , compact('users' , 'registers','confirm','prices','periods','teammates'));

    }

    public function ShowInfo($id){
        $user=User::find($id)->first();
        $registers=Register::where('user_id' , $id)->with('state')->first();
        $allarray=json_decode($registers);
        $prices=json_decode($allarray->priceplane);
        $periods=json_decode($allarray->periodplane);
        $teammates=json_decode($allarray->teammate);
        $state=$registers->state->name;
        return view('admin.userrequest.showinfo' , compact('user','registers','prices','periods','teammates','state'));
    }

    public function ConfirmInfo($id){

        $phone=User::find($id)->phone;
        return view('admin.userrequest.confirminfo' , compact('id','phone'));
    }

    public function FinalConfirm(ConfirmInfoRequest $request){
        try{
        Confirm::create([
            'register_id' => $request->id ,
            'phone_number' => $request->phone ,
            'confirm' => 1,
            'price' => $request->price,
            'created_at' => Carbon::now(),
        ]);

        $notification=[
            'message' => 'اطلاعات کاربر تایید شد',
            'alert-type' => 'success'
        ];
        return Redirect()->route('userrequest')->with($notification);
    }catch(Throwable $e){
            return back()->withErrors($e->getMessage());
      }

    }
}
