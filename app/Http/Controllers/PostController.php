<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if(!Auth::check()){
            return redirect('/login');
        }
        if ($request->user()->hasRole('super')){
            $posts = Post::get();
            return view('post.index',compact('posts'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        if(!Auth::check()){
            return redirect('/login');
        }
        if ($request->user()->hasRole('super')){
            $posts = Post::get();
            return view('post.create');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(!Auth::check()){
            return redirect('/login');
        }
        if ($request->user()->hasRole('super'))
        {
            $post = new Post();
            $post->title = $request->title;
            $post->sub_title = $request->sub_title;
            $post->content = $request->content;
            $post->author = Auth::user()->id;
            $post->save();
            return redirect("/dashboard/post");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post, Request $request)
    {
        if(!Auth::check()){
            return redirect('/login');
        }
        if ($request->user()->hasRole('super'))
        {
            return view('post.show',compact('post'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post, Request $request)
    {
        if(!Auth::check()){
            return redirect('/login');
        }
        if ($request->user()->hasRole('super'))
        {
        return view('post.edit',compact('post'));
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        if(!Auth::check()){
            return redirect('/login');
        }
        if ($request->user()->hasRole('super'))
        {
            $input = $request->all();
            $post->fill($input)->save();
            return redirect("/dashboard/post");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post, Request $request)
    {
        if(!Auth::check()){
            return redirect('/login');
        }
        if ($request->user()->hasRole('super'))
        {
            Post::destroy($post->id);
            return redirect("/dashboard/post");
        }
    }
}
