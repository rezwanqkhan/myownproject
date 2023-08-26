<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AboutController extends Controller
{
   public function index(){
    return view('backend.about.index')
           ->with('about', DB::table('abouts')->first());
   }

   public function store(Request $request){
      $request->validate([
           'Birthday'=>'required',
        'City'=>'required',
        'Age'=>'required',
        'Degree'=>'required',
        'description'=>'required',
      ]

      );}
}
