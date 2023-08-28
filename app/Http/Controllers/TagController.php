<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('tags.index', [
            'tags' => Tag::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tags.create_tags');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate_data = $request->validate([
            'name' => 'required'
        ]);

        Tag::create($validate_data);

        return redirect('/tags')->with('success', 'Data Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Tag $tag)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tag $tag)
    {
        return view('tags.edit_tag', [
            'data_lama' => $tag
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tag $tag)
    {
        $validate_data = $request->validate([
            'name' => 'required'
        ]);

        $tag->update($validate_data);

        return redirect('/tags')->with('success', 'Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tag $tag)
    {
        $tag->delete();

        return redirect('/tags')->with('success', 'Data Berhasil Dihapus');
    }
}
