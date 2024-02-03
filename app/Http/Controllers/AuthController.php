<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class AuthController extends Controller
{
    public function register()
    {
        return view('auth.register');
    }

    public function store()
    {

        //validate the request
        $validated  = request()->validate([
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email'],
            'password' => ['required', 'confirmed']
        ]);
        //create and save a new user instance
        User::create(
            [
                'name'=>$validated['name'],
                'email'=>$validated['email'],
                'password'=> Hash::make($validated['password']),
            ]
            );

        //redirect to homepage
        return redirect()->route('homepage')->with('success','you are registered successfully');
    }

    public function login()
    {
        return view('auth.login');
    }

    public function authenticate()
    {
        // dd(request()->all());
        //validate request
        $validated=request()->validate([
            'email'=>['required','email'],
            'password'=>['required']
        ]
        );

        //authenticate request
        if(auth()->attempt($validated))
        {
            //clear session regenerated before
            request()->session()->regenerate();

            return redirect()->route('dashboard')->with('success', 'User logged in successfully');
        }

        return back()->with('error', 'Login failed! Please check your credentials and try again');
    }

    public function logout()
    {
        auth()->logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();


        return redirect()->route('homepage')->with('success', 'you have been logged out successfuly');
    }

}
