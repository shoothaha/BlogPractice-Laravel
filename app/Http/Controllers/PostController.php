<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Session;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // 建立变量以存储所有数据库中post的内容
        $posts = Post::all();

        //返回视图
         return view('blogposts.index') -> with('posts', $posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('BlogPosts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // 检查/validate 数据输入
    	$this -> validate($request, array(
    		'titles' => 'required|max:255',
    		'body' => 'required'
    	));

        //存入数据库
    	$post = new Post;
    	$post -> titles = $request -> titles;
    	$post -> body = $request -> body;

    	$post -> save();

    	Session::flash('success', 'The blog post was successfully save!');

        //指向另一页

        return redirect() -> route('posts.show', $post -> id);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    	$post = Post::find($id);
        return view('blogposts.show') ->with('post', $post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    	$post = Post::find($id);
        return view('blogposts.edit')->with('post', $post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this -> validate($request, array(
    		'titles' => 'required|max:255',
    		'body' => 'required'
    	));

    	$post = Post::find($id);

    	$post->titles = $request->input('titles');
    	$post->body = $request->input('body');

    	$post->save();

    	Session::flash('success', 'This post was changed and saved!');

    	return redirect()->route('posts.show', $post->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);

        $post->delete();

        Session::flash('success', 'You have successfully deleted the post!');

        return redirect()->route('posts.index');
    }
}
