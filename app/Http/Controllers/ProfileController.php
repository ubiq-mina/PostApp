<?php

namespace PostApp\Http\Controllers;

use Illuminate\Http\Request;

use PostApp\User;

use View;
use PostApp\Http\Requests\ProfileFormRequest;

class ProfileController extends Controller
{

    public function intro()
    {
        return view('intro');
    }

    public function store(ProfileFormRequest $request)
    {
        echo 'Checking form...';
        // $validatedData = "";
        // $data = json_decode($_POST["data"]);
        // echo $_POST["data"];
        
        // if ($request->has('contact-form')) {

        // }

        // if ($validatedData != "") {
        //     echo json_encode($_POST);
        // }
    }

    public function create($id)
    {
        $user = User::find($id);

        return view('profile', ['user' => $user]);
    }
}
