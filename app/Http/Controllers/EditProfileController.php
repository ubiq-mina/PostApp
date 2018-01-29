<?php

namespace PostApp\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Session;
Use View;
use Auth;

class EditProfileController extends Controller
{
    public function create() {

        $profile = Auth::user()->profile;
        $profile->birthdate = explode(' ', $profile->birthdate)[0];
        $profile->sex = $profile->sex ? 'Female' : 'Male';

        return view('editprofile', ['profile' => $profile]);
    }
}
