<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller{
    public function __construct(){
      $this->middleware('age')->only('middlewareAgePage');
    }

    public function contactPage(){
      return view('pages.contact');
    }

    public function shoutoutPage(Request $request){

      $text = $request->text;

      $colors = array(
        "red"    => "for passion", 
        "green"  => "color of nature",
        "blue"   => "it is the color of the sky",
        "white"  => "pureness",
        "black"  => "being bold",
        "silver" => "authentic",
        "yellow" => "warmth"
      );

      return  view('shoutout', array(
          'text'   => $text, 
          'colors' => $colors
      ));

    }


    public function middlewareAgePage(Request $request){
      $age = $request->age;

      return view('age', array('age'=>$age));
    }
}
