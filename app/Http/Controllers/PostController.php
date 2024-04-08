<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['show','index']);
    }
    public function create()

    {

        return view('posts.create');
    }

    public function index(User $user)

    {


        $post = Post::where('user_id', $user->id)->paginate(10);

        return view('dashboard', [
            'user' => $user,
            'posts'=>$post,
        ]);
    }


    public function store(Request $request)

    {

    $request->validate([
        'titulo'=> 'required|max:250',
        'description'=> 'required',
        'imagen'=>'required'



    ]);


    $request->user()->posts()->create([
        'titulo' =>$request->titulo,
        'description' =>$request->description,
        'imagen' =>$request->imagen,
        'user_id' =>auth()->user()->id
    ]);


    return redirect()->route('posts.index',auth()->user()->username);


    }

    public function show(User $user,Post $post){




        return view('posts.show',[
            'post'=>$post


        ]);

    }



}
