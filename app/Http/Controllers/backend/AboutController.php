<?php
namespace App\Http\Controllers\backend;
use App\Http\Controllers\Controller;
use App\Models\About;
use  Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class AboutController extends Controller
{
   public function index(){
    return view('backend.about.index')
    ->with('about', About::first());
   }
   
   public function store(Request $request){

      $request->validate([
        
         'Birthday'=>'required',
        'City'=>'required',
        'Age'=>'required',
        'Degree'=>'required',
        'description'=>'required',

      ]);
    
      About::where('id',1)->update([
         'Birthday'=>$request->Birthday,
         'City'=>$request->City,
         'Age'=>$request->Age,
         'Degree'=>$request->Degree,
         'description'=>$request->description,
      ]);

     Session::flash('success','Creat successfully');
    return redirect()->back();
   }
}
