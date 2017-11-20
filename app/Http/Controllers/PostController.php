<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class PostController extends Controller
{
	public function __construct() 
    {
        $this->middleware('auth')->only('create', 'store');
    }


	public function index()
    {
        $posts = Post::latest()->get();
    	return view('posts.posts', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function show($id)
    {
    	$post = Post::find($id);

        return view('posts.show', compact('post'));
    }

    public function store(Request $request)
    {

/*        $validator = Validator::make($request->all(), [
            'title' => 'required|max:40',
            'body' => 'required|min:20',
        ]);*/

        $this->validate($request, [
            'title'=>'required|max:40'
        ]);

/*        if ($validator->fails()) {
            return redirect('threads/create')
                        ->withErrors($validator)
                        ->withInput();
        }*/

        Post::create([
            'title'=> $request->title,
            'user_id'=> auth()->id()
            ]);

        return redirect('/posts');
    }
}
