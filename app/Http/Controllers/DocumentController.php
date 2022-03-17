<?php

namespace App\Http\Controllers;

use App\Http\Requests\DocumentRequest;
use App\Models\Document;
use Illuminate\Http\Request;
// use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;

class DocumentController extends Controller
{
    public function StoreDoc(DocumentRequest $request){
        $melli_image=$request->file('melli');
        $fish_image=$request->file('fish');

        $melli_gen=hexdec(uniqid()).'.'.$melli_image->getClientOriginalExtension();
        // Image::make($melli_image)->resize(300,200)->save('image/docs'.$melli_gen);
        $melli_img='image/docs/'.$melli_gen;

        $fish_gen=hexdec(uniqid()).'.'.$fish_image->getClientOriginalExtension();
        // Image::make($fish_image)->resize(300,200)->save('image/docs'.$fish_gen);
        $fish_img='image/docs/'.$fish_gen;

        Document::create([
            'user_id' => Auth::user()->id,
            'melli_image' => $melli_img,
            'fish_image' => $fish_img,
            'created_at' => Carbon::now(),
        ]);
        $notification=array(
            'message' => 'مدارک با موفقیت بارگزاری شد',
            'alert_type' => 'success'
         );

        return Redirect()->back()->with($notification);
    }
}
