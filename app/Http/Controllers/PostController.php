<?php

namespace App\Http\Controllers;

use App\Models\post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = post::orderBy('title')->get();

        return $posts;
    }

    public function show($id){

        $post = Post::find($id);

        if(!$post){
            return response()->json(null, 404);  
        }

        return $post;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|min:5|max:255',
            'content' => 'required|min:15|max:50000'
        ]);

        $user = auth()->user();

        $post_temp = new post();
        $post_temp->title = $request->title;
        $post_temp->content = $request->content;
        $post_temp->user_id = $user->id;
        $post_temp->save();

        return response()->json($post_temp, 201);  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, post $post)
    {
        
        $validatedData = $request->validate([
            'title' => 'required|min:5|max:255',
            'content' => 'required|min:15|max:50000'
        ]);

        $post->title = $request->title;
        $post->content = $request->content;
        $post->save();

    
        return response()->json($post, 200);  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(post $post)
    {
        $post->delete();

        return response()->json(null, 204);  
    }
   
}












