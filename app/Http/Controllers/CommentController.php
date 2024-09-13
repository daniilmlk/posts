<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function create()
    {
        return view('comment.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data= $request->all();
        $data['post_id']=1;
        $data['user_id']=1;
        Comment::create($data);

        return redirect()->route('posts.index');
    }

    /**
     * Display the specified resource.
     */
    // public function show(Post $post)
    // {
    //     return view('posts.show', ['post' => $post]);
    // }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comment $comment)
    {
        return view('comment.edit', ['comment' => $comment]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comment $comment)
    {
        $data= $request->all();
        $data['post_id']=1;
        $data['user_id']=1;
        $comment->update($data);

        return redirect()->route('posts.index');
    }
    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comment $comment)
    {
        $post->delete();
        
        return redirect()->route('posts.index');
    }
}
