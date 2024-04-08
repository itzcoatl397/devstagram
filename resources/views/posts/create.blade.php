@extends('layouts.app')

@section('titulo')
Crea una nueva Publicacion
@endsection


@push('style')

<link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">

@endpush
@section('contenido')
<div class="md:flex md:items-center">
    <div class="md:w-1/2 px-10">

<form action="{{route('imagenes.store')}}" method="post" id="dropzone" class="dropzone border-dashe border-2 w-full h-96 rounded flex flex-col justify-center items-center"  enctype="multipart/form-data">
@csrf
</form>

    </div>
    <div class="md:w-1/2 bg-white p-10 rounded-lg mt-10 md:mt-0 ">
        <form action="{{ route('posts.store') }}" method="POST">
            @csrf

            <div class="mb-5">
                <label for="titulo" id="titulo" class="mb-2 block uppercase text-gray-500 font-bold">Publicación</label>
                <input type="text" id="titulo" name="titulo" placeholder="Titulo de la  publicacion" class="w-full border p-3  rounded-lg placeholder:ml-4 @error('name') border-red-600 @enderror" value={{ old('titulo') }}>
                @error('titulo')
                <p class="p-3 shadow-lg bg-red-600 text-white w-full mt-3 b-5 text-sm my-2 font-bold uppercase text-center">
                    {{ $message }}
                </p>
                @enderror

            </div>

            <div class="mb-5">
                <label for="description" id="description" class="mb-2 block uppercase text-gray-500 font-bold">Descripción</label>
                <textarea type="text" id="description" name="description" placeholder="Descripcion de  la  publicacion" class="w-full border p-3  rounded-lg placeholder:ml-4 @error('description') border-red-600 @enderror" >{{ old('description') }} </textarea>
                @error('description')
                <p class="p-3 shadow-lg bg-red-600 text-white w-full mt-3 b-5 text-sm my-2 font-bold uppercase text-center">
                    {{ $message }}
                </p>
                @enderror

            </div>

            <div class="mb-5">

                <input type="hidden" id="imagen" name="imagen" placeholder="Titulo de la  publicacion" class="w-full border p-3  rounded-lg placeholder:ml-4 @error('imagen') border-red-600 @enderror" value={{ old('imagen') }}>
                @error('imagen')
                <p class="p-3 shadow-lg bg-red-600 text-white w-full mt-3 b-5 text-sm my-2 font-bold uppercase text-center">
                    {{ $message }}
                </p>
                @enderror

            </div>






            <input type="submit" class="bg-sky-500  hover:bg-sky-600 transition-colors text-white p-2 rounded-lg cursor-pointer    w-full font-bold uppercase text-2xl" value="Crear Publicacion">


        </form>


    </div>




</div>
@endsection
