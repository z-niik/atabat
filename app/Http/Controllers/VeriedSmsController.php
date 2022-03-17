<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sms;

class VeriedSmsController extends Controller
{
    public function Verification(Request $request){
        // dd($request->code);
        $verify=Sms::where('user_id' , $request->id)->first();
        // dd($verify->code==$request->code);
        if($verify->code==$request->code)
        {
            return Redirect()->route('success.registration')->with('success','متقاضی گرامی');
         }
        else{
            return Redirect()->back()->with('error', 'کد وارد شده صحیح نمیباشد' );
        }
    }
}
