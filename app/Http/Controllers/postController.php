<?php

namespace App\Http\Controllers;

use App\Models\post;
use Illuminate\Http\Request;

class postController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = post::all();
        return view('post.index')->with('posts',$posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'subject' => 'required',
            'fname' => 'required',
            'lname' => 'required'
        ]);

        $post = new post;
        $post->subject = $request->subject;
        $post->fname = $request->fname;
        $post->lname = $request->lname;
        $post->body = $request->description;
        $post->save();
        return redirect('/post')->with('success', 'Creating Done successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(post $post)
    {
        $p = post::find($post->id);
        return view('post.show')->with('post',$p);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(post $post)
    {
        $post = post::find($post->id);
        return view('post.edit')->with('post',$post);
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
        $this->validate($request,[
            'subject' => 'required',
            'fname' => 'required',
            'lname' => 'required'
        ]);
        $post = post::find($post->id);
        $post->subject = $request->subject;
        $post->fname = $request->fname;
        $post->lname = $request->lname;
        $post->body = $request->description;
        $post->user_id = auth()->user()->id;
        $post->save();
        return redirect('/post')->with('success', 'Creating Done successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(post $post)
    {
        $post = post::find($post->id);
        $post->delete();
        return redirect('/post')->with('success', 'Creating Done successfully');
    }
}
