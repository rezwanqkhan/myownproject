<?php

namespace App\Http\Controllers;

//use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
   public function index() {
      //$about=About::first() ;
         // ornek
         // $about = About::where("id",$id)->get();
         //$about = About::where("id",$id)->first();
      $about=About::all();

      //return view('frontend.sections.about')->with(array('about'=>$about)) ;
      return view('frontend.sections.about',compact('about'));
      }
}
