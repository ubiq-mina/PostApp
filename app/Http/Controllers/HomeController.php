<?php

namespace PostApp\Http\Controllers;

use Illuminate\Http\Request;

use PostApp\Post;
use PostApp\Profile;
use View;
use Auth;

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
        // $user = Auth::user();
        // $profile = Profile::find($user->id);
        // if (!$profile) {
        //     // TODO: Initiate intro sequence.
        //     return view('intro', ['user' => $user]);
        // }

        $posts = Post::orderBy('created_at', 'desc')->simplePaginate(15);
        
        return view('home', ['posts' => $posts]);
    }
}
