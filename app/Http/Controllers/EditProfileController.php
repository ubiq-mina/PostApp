<?php

namespace PostApp\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Session;
use PostApp\Profile;

Use View;
use Auth;

class EditProfileController extends Controller
{
    public function create() {

        $profile = Auth::user()->profile;
        $profile->birthdate = explode(' ', $profile->birthdate)[0];
        $profile->sex = $profile->sex ? 'Female' : 'Male';

        $countriesSelect = [];
        array_push($countriesSelect, [null => 'Select a country']);

        $countries = Profile::select('country')->get();
        foreach ($countries as $country) {
            // echo 'Country: ', $country['country'];
            array_push($countriesSelect, [$country['country'] => $country['country']]);
        }

        return view('editprofile', ['profile' => $profile, 'countriesSelect' => $countriesSelect]);
    }
}
