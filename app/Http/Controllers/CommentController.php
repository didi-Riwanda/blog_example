<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('comment.index', [
            'comment' => Comment::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('comment.create_comment', [
            'posts' => Post::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'body' => 'required',
            // 'post_id' => 'required'
        ]); 

        Comment::create($validate);

        return redirect()->route('comment.index')->with('success', 'Data Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Comment $comment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comment $comment)
    {
        return view('comment.edit', [
            'data_lama' => $comment,
            'posts' => Post::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comment $comment)
    {
        $validate = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'body' => 'required',
            // 'post_id' => 'required'
        ]);

        $comment->update($validate);

        return redirect()->route('comment.index')->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comment $comment)
    {
        $comment->delete();

        return redirect()->route('comment.index')->with('success', 'Data Berhasil Dihapus');
    }

    public function comment(Post $post){
        return view('comment.create_comment',[
            'posts' => $post
        ]);
    }
}
