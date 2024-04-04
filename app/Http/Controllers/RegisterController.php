<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

use Illuminate\Support\Str;

class RegisterController extends Controller
{
    //


    public  function index()
    {
        return view('auth.register');
    }

    public  function store(Request $request)
    {

        $request->request->add(['username'=>  Str::slug($request->username)]);

        $request->validate([
            'name' => 'required|max:30|min:5',
            'username'=>'required|unique:users|min:3|max:20',
            'email'=>'required|unique:users|email|max:60',
            'password'=>'required|min:5|max:8|confirmed',
        ]);

            // create  user  in  the  database witn the  method create

            User::create([

            'name'=>$request->name,
            'username'=>$request->username,
            'email'=>$request->email,
            'password'=>$request->password,
        ]);

        // autenticar
         auth()->attempt($request->only('email','password'));


    return redirect()->route('posts.index');



    }
}
