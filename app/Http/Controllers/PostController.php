<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $post = Post::all();
        return view('posts.index', ['posts' => $post]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data= $request->all();
        $data['user_id']=1;
        Post::create($data);

        return redirect()->route('posts.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return view('posts.show', ['post' => $post]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        return view('posts.edit', ['post' => $post]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $data= $request->all();
        $data['user_id']=1;
        $post->update($data);

        return redirect()->route('posts.index');
    }
    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();
        
        return redirect()->route('posts.index');
    }

    public function addComment(Request $request, Post $post) {
        $posts->comment()->attach($request['comment']);
        return redirect('/posts/' . $post->id)->with('success', 'Comment added successfully!');
    }
    public function removeComment(Request $request, Post $post) {
        $posts->comment()->detach($request['comment']);
        return redirect('/posts/' . $post->id)->with('success', 'Comment removed successfully!');
    }
}
