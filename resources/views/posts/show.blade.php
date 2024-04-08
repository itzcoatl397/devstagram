@extends('layouts.app')




@section('titulo')
{{ $post->titulo }}

@endsection


@section('contenido')

<div class="container mx-auto flex">

    <div class="md:w-1/2">
        <img src="{{asset('uploads/').'/'.$post->imagen}}" alt="{{$post->titulo}}">

        <div class="p-3">
            <p>0 Likes</p>
        </div>

        <div>
            <p class="font-bold">{{$post->user->username}}</p>
            <p class=" text-sm text-gray-500">{{$post->created_at->diffForHumans()}}</p>
            <p class="mt-5 border-dashed">
                {{ $post->description }}

            </p>

        </div>


    </div>
    <div class="md:w-1/2 p-5 ">
        <div class="shadow bg-white p-5 mb.5">

        @auth


            <p class="text-xl font-bold text-center mb-4">Agrega un Nuevo Comentario</p>

            <form action="{{route('comentarios.store',[
            'post'=>$post,
            'user' =>$post->user

            ])}}" method="post">
            @csrf

                <div>
                    <label for="comment" id="comment" class="mb-2 block uppercase text-gray-500 font-bold">Añade un Comentario</label>
                    <textarea type="text" id="comment" name="comment" placeholder="añade  un comentario" class="w-full border p-3  rounded-lg placeholder:ml-4 @error('comment') border-red-600 @enderror"> </textarea>
                    @error('comment')
                    <p class="p-3 shadow-lg bg-red-600 text-white w-full mt-3 b-5 text-sm my-2 font-bold uppercase text-center">
                        {{ $message }}
                    </p>
                    @enderror
                </div>


                <input type="submit" class="bg-sky-600  hover:bg-sky-700 transition-colors text-white p-2 rounded-lg cursor-pointer    w-full font-bold uppercase text-2xl" value="Comentar">



            </form>
            @endauth

            @guest
                Tus c
            @endguest

        </div>

    </div>


</div>



@endsection
