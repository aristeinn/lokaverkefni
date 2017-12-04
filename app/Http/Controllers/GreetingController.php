<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class GreetingController extends Controller
{
	public function index()
    {
        $posts = Post::latest()->get();
    	return view('layouts.welcome', compact('posts'));
    }
}
