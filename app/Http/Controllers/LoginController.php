<?php

namespace PostApp\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function create() 
    {
        return view('login.create');
    }

    public function store()
    {
        //
    }
}
