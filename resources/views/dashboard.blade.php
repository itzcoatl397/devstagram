@extends('layouts.app')

@section('titulo')
Perfil : {{ $user->username }}
@endsection

@section('contenido')
<div class="flex justify-center">
    <div class="w-full md:w-8/12 lg:w-6/12 flex  flex-col items-center  md:flex-row">
        <div class="w-8/12 lg:w-6/12 px-5 md:flex ">
            <img class="" src="{{ asset('img/usuario.svg') }}" alt="Avatar del usuario" />
        </div>
        <div class="md:w-8/12 lg:w-6/12 px-5 flex  items-center py-10   md:items-start md:py-10 flex-col md:justify-center ">
            <p class="text-gray-700 text-2xl">{{ $user->username }}</p>

            <p class="text-sm text-gray-800 mb-3 font-bold mt-5">0 <span>Seguidores</span></p>
            <p class="text-sm text-gray-800 mb-3 font-bold mt-3">0 <span>Siguiendo</span></p>
            <p class="text-sm text-gray-800 mb-3 font-bold mt-3">{{ $posts->count() }} <span>Posts</span></p>


        </div>

    </div>
</div>

<section class="container mx-auto mt-10">
    <h2 class="text-4xl text-center font-black my-10">Publicacines</h2>
    @if ($posts->count() > 0 )
    <div class="grid md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 md:content-center">
        @foreach ($posts as $post)

        <div>
            <a href="{{route('posts.show',['post'=>$post,'user'=>$user])}}">
                <img src="{{asset('uploads').'/'. $post->imagen}}" alt="imegens">
            </a>

        </div>

        @endforeach

    </div>

    <div class="mt-10 ">
        {{ $posts->links('pagination::tailwind') }}
    </div>

    @else
      <p class="text-gray-600 text-sm text-center font-bold ">No hay post</p>
    @endif




</section>
@endsection
