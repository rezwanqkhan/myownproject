<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Str;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return  view('backend.post.index')
                     ->with('posts',Post::paginate(10));
    }
    /**
     * Show the form for creating a new resource.
     * 
     */
// public function create(Request $request) {
//        $data  =  Post::all();
       
//         return  view('backend.post.create', compact('data'));
// }
    public function create()
    {
      
        return view('backend.post.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {        
             // its for requiring to fill the giveing inputs
            $request ->validate([
            'title' => 'required|max:50',
            'sub_title'=> 'required|max:50',
            'description'=> 'required',
            ]);
            // adding data to the databes by create method
            Post::create(['title'=>$request ->title,'sub_title'=>$request ->sub_title,'description'=>$request->description,'slug'=>Str::slug($request->title)]);
             Session::flash('success','Creat successfully');
            // back to main page of posts
            return redirect()->route('post.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        return view('backend.post.edit')
                ->with('post', $post);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
           // its for requiring to fill the giveing inputs
           $request ->validate([
            'title'=>'required|max:50',
            'sub_title'=>'required|max:50',
            'description'=>'required',
            ]);

            $post ->title = $request-> title;
            $post ->sub_title = $request-> sub_title;
            $post ->description = $request-> description;
            $post ->slug = Str::slug($request->title);
            $post ->save();
            Session::flash('success','Update successfully');
            return redirect()->route('post.index');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return "success";
    }
}
