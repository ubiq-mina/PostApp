<?php

namespace PostApp\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Session;
Use View;
use Session;

class EditProfileController extends Controller
{
    public function create() {
        // Session::flash('Hello', 'Hello');
        Session::put('username', 'Hello');

        // echo Session::get('username');
        return view('editprofile');
    }
}
