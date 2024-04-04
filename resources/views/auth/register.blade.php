@extends('layouts.app')


@section('titulo')
Registrate en Devstegram
@endsection


@section('contenido')
<div class="md:flex md:justify-center md:gap-10 md:items-center">
    <div class="md:w-6/12  p-5 ">


        <img src="{{ asset('img/registrar.jpg') }}" alt="imagen de  registro " srcset="">
    </div>

    <div class="md:w-4/12 bg-white p-6 rounded-lg mt-5 ">
        <form action="{{ route('register') }}" method="POST">
            @csrf

            <div class="mb-5">
                <label for="name" id="name" class="mb-2 block uppercase text-gray-500 font-bold">Nombre</label>
                <input type="text" id="name" name="name" placeholder="tu nombre" class="w-full border p-3  rounded-lg placeholder:ml-4 @error('name') border-red-600 @enderror" value={{ old('name') }}>
                @error('name')
                <p class="p-3 shadow-lg bg-red-600 text-white w-full mt-3 b-5 text-sm my-2 font-bold uppercase text-center">
                    {{ $message }}</p>
                @enderror

            </div>



            <div class="mb-5">
                <label for="username" id="username" class="mb-2 block uppercase text-gray-500 font-bold">Username</label>
                <input type="text" id="username" name="username" placeholder="username" class="w-full border p-3  rounded-lg placeholder:ml-4 @error('username') border-red-600 @enderror" value={{ old('username') }}>
                @error('username')
                <p class="p-3 shadow-lg bg-red-600 text-white w-full mt-3 b-5 text-sm my-2 font-bold uppercase text-center">
                    {{ $message }}</p>
                @enderror

            </div>



            <div class="mb-5">
                <label for="email" id="email" class="mb-2 block uppercase text-gray-500 font-bold">Correo
                    electronico</label>
                <input type="email" id="email" name="email" placeholder="correo electronico" class="w-full border p-3  rounded-lg placeholder:ml-4 @error('email') border-red-600 @enderror" value={{ old('email') }}>
                @error('email')
                <p class="p-3 shadow-lg bg-red-600 text-white w-full mt-3 b-5 text-sm my-2 font-bold uppercase text-center">
                    {{ $message }}</p>
                @enderror

            </div>


            <div class="mb-5">
                <label for="password" id="password" class="mb-2 block uppercase text-gray-500 font-bold">Password</label>
                <input type="password" id="password" name="password" placeholder="Contraseña" class="w-full border p-3  rounded-lg placeholder:ml-4 @error('password') border-red-600 @enderror">

                @error('password')
                <p class="p-3 shadow-lg bg-red-600 text-white w-full mt-3 b-5 text-sm my-2 font-bold uppercase text-center">
                    {{ $message }}</p>
                @enderror
            </div>


            <div class="mb-5">
                <label for="password_confirmation" id="password" class="mb-2 block uppercase text-gray-500 font-bold">Repetir Password</label>
                <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Repite tu Contraseña" class="w-full border p-3  rounded-lg placeholder:ml-4">
            </div>

            <input type="submit" class="bg-sky-500  hover:bg-sky-600 transition-colors text-white p-2 rounded-lg cursor-pointer    w-full font-bold uppercase text-2xl" value="Crear Cuenta">


        </form>


    </div>

</div>
@endsection
