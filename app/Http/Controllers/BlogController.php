<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class BlogController extends Controller
{
    
	public function getMainPage(){

		$posts = Post::paginate(5);

		return view('publicviews.index')->with('posts', $posts);
	}




    public function getBlogs($slug) {

    	$post = Post::where('slug', '=', $slug)->first();

    	return view('publicviews.blogs')->with('post', $post);

    }
}
