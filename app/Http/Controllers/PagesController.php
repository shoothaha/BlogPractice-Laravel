<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PagesController extends Controller
{
    public function getIndex () {

        $posts = Post::orderby('created_at', 'desc')->limit(4)->get();
    	return view('blogviews.welcome')->with('posts', $posts);
    }

    public function getAbout() {

    	$firstName = 'Learning';
    	$familyName = 'Laravel';
    	$email = '123@abc.com';
    	$fullName = $firstName . ' ' . $familyName;
    	

    	return view('blogviews.about') -> with('fullName', $fullName) -> with ('email', $email);
    }

    public function getContact() {
    	return view('blogviews.contact');
    }


}
