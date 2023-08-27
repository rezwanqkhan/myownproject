<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
   public function index(){
   
    return view('frontend.sections.about')
    ->with('about', About::first());
   }
}
