<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function getIndex () {
    	return view('blogviews.welcome');
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
