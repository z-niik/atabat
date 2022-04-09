<?php

namespace App\Http\Controllers;

use App\Models\Tour;
use Illuminate\Http\Request;

class TourController extends Controller
{
    public function ListTour(){
        $tours=Tour::all();
        return view('tour' , compact('tours'));
    }
    public function ViewTours(){
        if(!isset($_GET['accept-rules'])){
            return Redirect()->back()->with('error','لطفا شرایط و قوانین را مطالعه نموده و تایید نمایید.');
            }else{

        $tours=Tour::all();
        return view('tour' , compact('tours'));
            }
    }

    public function ViewDetails($id){
        $tour=Tour::where('id' , $id)->first();
        $price=number_format($tour->price);
        return view('detailtour' , compact('tour','price'));
    }
}
