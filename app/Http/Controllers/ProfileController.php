<?php

namespace PostApp\Http\Controllers;

use Illuminate\Http\Request;

use PostApp\User;
use PostApp\Profile;

use View;
use Auth;
use PostApp\Http\Requests\ProfileFormRequest;

class ProfileController extends Controller
{

    public function intro()
    {
        return view('intro');
    }

    public function store(ProfileFormRequest $request)
    {
        // $validatedData = "";
        // $data = json_decode($_POST["data"]);
        // echo $_POST["data"];
        
        // if ($request->has('contact-form')) {

        // }

        // if ($validatedData != "") {
        //     echo json_encode($_POST);
        // }

        // TODO: Perform stronger validation
        $profile = Auth::user()->profile;
        $profile->user_id = Auth::user()->id;
        $profile->birthdate = $request->birthdate;
        $profile->country = $request->country;
        $profile->sex = $request->sex == 'Male' ? 0 : 1;
        $profile->mobile = $request->mobile;

        $profile->save();

        return view('profile', ['user' => Auth::user()]);
    }

    public function create($id)
    {
        $user = User::find($id);

        return view('profile', ['user' => $user]);
    }
}
