<?php

namespace App\Http\Controllers;

use App\Models\Comentario;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class ComentarioController extends Controller
{
    //


    public function store(Request $request,User $user,Post $post){

        // validar
        $request->validate([
            'comment' =>"required|max:255"
        ]);

        Comentario::create([
            "user_id" =>auth()->user()->id,
            "post_id" =>$post->id,
            "comentario"=> $request->comment
        ]);


        return back()->with("mensaje","Comentario Realizado Correctamente");



        //


    }
}
