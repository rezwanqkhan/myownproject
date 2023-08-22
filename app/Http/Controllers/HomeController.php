<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
class HomeController extends Controller
{
   protected function index(){
    return view('frontend.pages.allincludes')
                     //  ->with('posts',Post::paginate(3));
                      ->with('posts',Post::orderBy('created_at','DESC')->paginate(3));
   }

   public function show($post){
   $post = Post::where('id',$post)->firstorFail();
   return view('frontend.home.show')
                ->with('post', $post);

   }
}
