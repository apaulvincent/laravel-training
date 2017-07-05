<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    public function index() {


        $posts = Post::latest()->get();

        // dd($posts);

        return view('posts.index', compact('posts'));
    }

    public function show(Post $post) {
        
        // dd($post);

        return view('posts.show', compact('post'));
    }

    public function create() {

        return view('posts.create');
    }

    public function store() 
    {

        // dd( request()->all() );

        // Create new post using the request data
        // $post = new Post;

        // $post->title = request('title');
        // $post->body = request('content');

        // // Save it to the database
        // $post->save();


        // Another way to save data...
        // Post::create([
        //     'title' => request('title'),
        //     'body' => request('content')
        // ]);

        $this->validate(request(), [
            'title' => 'required',
            'body' => 'required'
        ]);


        // Another shortcut to save data...
        Post::create(request(['title', 'body']));

        // And then redirect to post page

        return redirect('/');

    }

}
