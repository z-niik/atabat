<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdminRequest;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function Register(AdminRequest $request)
    {


        $notification=array(
            'message' => 'شما با موفقیت ثبت نام شدید . لطفا وارد شوید',
            'alert-type' => 'success'
         );

        $password=Hash::make($request->password);
        Admin::insert([
            'name' => $request->name,
            'email' => $request->email,
            'password'=>$password,
            'created_at' => Carbon::now(),
        ]);
        return Redirect()->route('admin.login')->with($notification);

    }
    public function Login(LoginRequest $request){

        if(Auth::guard('admin')->attempt(['email' => $request->email, 'password' => Hash::make($request->password)])){

            return view('admin.index');
        }
        else echo 'sssss';


    }
}
