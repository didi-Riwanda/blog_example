<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('posts.index', [
            'posts' => Post::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('posts.create_posts', [
            'tags' => Tag::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate_data = $request->validate([
            'title' => 'required',
            'content' => 'required',
            'timezone' => 'required',
            'tags_id' => 'required'
        ]);

        Post::create($validate_data);

        return redirect('/posts')->with('success', 'Data Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return view('posts.detail', [
            'post' => $post,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        return view('posts.edit_post', [
            'data_lama' => $post,
            'tags' => Tag::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $validate_data = $request->validate([
            'title' => 'required',
            'content' => 'required',
            'timezone' => 'required',
            'tags_id' => 'required'
        ]); 

        $post->update($validate_data);

        return redirect('/posts')->with('success', 'Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();

        return redirect('/posts')->with('success', 'Data Berhasil Dihapus');
    }
}
