<?php

namespace PostApp\Http\Controllers;

use Illuminate\Http\Request;

use PostApp\Post;
use View;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')->simplePaginate(15);
        
        return view('home', ['posts' => $posts]);
    }
}
