<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserLoginRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\Register;
use App\Models\Confirm;

class AuthController extends Controller
{
    public function LoginUser(UserLoginRequest $request){

        $credentials=['phone' => $request->username, 'password' => $request->password];
        // dd($credentials);
        if(Auth::attempt($credentials)){
            $id=auth()->user()->id;
            $register=Register::where('user_id' , $id)->first();
            $confirm=Confirm::select('confirm')->where('register_id',$register->id);
            return view('user.index' , compact('confirm'));
            }
            $notification=array(
                'message' => 'نام کاربری یا رمز اشتباه است',
                'alert-type' => 'error',
            );
             return redirect()->back()->with($notification);


    }

    public function logout(Request $request)
    {
            auth()->logout();
            $request->session()->invalidate();
            return redirect()
                ->route('user.login')
                ->with('success','شما از پنل کاربری خود خارج شدید');
    }
}
