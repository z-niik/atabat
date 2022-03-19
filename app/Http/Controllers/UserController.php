<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\User;
use App\Models\Register;
use App\Models\Document;
use App\Http\Requests\DocumentRequest;
use Illuminate\Support\Carbon;
use Intervention\Image\Facades\Image;

class UserController extends Controller
{
    public function ShowInfo(){
        $user=Auth::user();
        $register=Register::where('user_id',$user->id)->with('state')->first();

        $allarray=json_decode($register);
        $prices=json_decode($allarray->priceplane);
        $periods=json_decode($allarray->periodplane);
        $teammates=json_decode($allarray->teammate);
        $state=$register->state->name;

        return view('user.myinfo' , compact('user','register','prices','periods','teammates','state'));
    }
    public function UploadDoc(){
        $id=Auth::user()->id;
        $doc=Document::where('user_id' , $id)->first();
        return view('user.upload', compact('doc'));
    }

    public function StoreDoc(DocumentRequest $request){

        $id=Auth::user()->id;
        $doc=Document::where('user_id' , $id)->first();

        $melli_image=$request->file('melli');
        $fish_image=$request->file('fish');
// dd($melli_image);
        $melli_gen=hexdec(uniqid()).'.'.$melli_image->getClientOriginalExtension();
        Image::make($melli_image)->resize(300,200)->save('images/docs/'.$melli_gen);
        $melli_img='images/docs/'.$melli_gen;
// dd($melli_gen);
        $fish_gen=hexdec(uniqid()).'.'.$fish_image->getClientOriginalExtension();
        Image::make($fish_image)->resize(300,200)->save('images/docs/'.$fish_gen);
        $fish_img='images/docs/'.$fish_gen;
        if($doc)
        {
            $old_melli=$doc->melli_image;
            $old_fish=$doc->fish_image;
            unlink($old_melli);
            unlink($old_fish);
            Document::find($doc->id)->update([
                'melli_image' => $melli_img,
                'fish_image' => $fish_img,
            ]);
        }else{
        Document::create([
            'user_id' => Auth::user()->id,
            'melli_image' => $melli_img,
            'fish_image' => $fish_img,
            'created_at' => Carbon::now(),
        ]);
    }
        $notification=array(
            'message' => 'مدارک با موفقیت بارگزاری شد',
            'alert_type' => 'success'
         );

        return Redirect()->back()->with($notification);
    }
}
