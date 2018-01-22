<?php

namespace PostApp\Http\Controllers;

use Illuminate\Http\Request;

use PostApp\User;

use View;

class ProfileController extends Controller
{

    public function intro($id)
    {
        return view('intro');
    }

    public function checkForm(Request $request)
    {
        // echo 'Checking form...';
        $validatedData = "";
        $data = json_decode($_POST["data"]);
        
        if ($request->has('contact-form')) {

        }

        if ($validatedData != "") {
            echo json_encode($_POST);
        }
    }

    public function create($id)
    {
        $user = User::find($id);

        return view('profile', ['user' => $user]);
    }
}
