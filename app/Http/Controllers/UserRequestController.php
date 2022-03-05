<?php

namespace App\Http\Controllers;

use App\Models\Register;
use Illuminate\Http\Request;
use App\Models\User;

class UserRequestController extends Controller
{

    public function ShowRequest(){
        $users=User::select('id','melli_code','phone','birthdaty')->get();
        $registers=Register::all();
        return view('admin.userrequest.index' , compact('users' , 'registers'));
    }
}
