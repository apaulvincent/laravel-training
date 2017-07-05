<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;


class RegistrationController extends Controller
{
    public function create()
    {
        return view('register.create');
    }

    public function store()
    {
        //  Validate the form 

        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ]);
        
        // Create and save user

        $user = User::create( request(['name', 'email', 'password']));

        // Sign them in

        auth()->login($user);

        // Redirect to homepage
 
        return redirect()->home();

    }

}
