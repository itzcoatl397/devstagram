<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //

    public function index()
    {
        return view('auth.login');
    }

    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (!auth()->attempt($request->only('email', 'password'),$request->rember)) {
            return back()->with('mensaje', 'Credenciales Incorrectas');
        }
        return redirect()->route('posts.index',auth()->user()->username);
    }
}
