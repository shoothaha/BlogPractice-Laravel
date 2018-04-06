<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class BlogController extends Controller
{
    public function getBlogs($slug) {

    	$post = Post::where('slug', '=', $slug)->first();

    	return view('publicviews.blogs')->with('post', $post);

    }
}
