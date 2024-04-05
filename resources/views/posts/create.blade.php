@extends('layouts.app')

@section('titulo')
    Crea una nueva publicacion
@endsection

@section('contenido')
    <div class="md:flex md:items-center">
        <div class="md:w-1/2 px-10">imagn aqui</div>
        <div class="md:w-1/2 bg-white p-10 rounded-lg mt-5 ">
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






                <input type="submit" class="bg-sky-500  hover:bg-sky-600 transition-colors text-white p-2 rounded-lg cursor-pointer    w-full font-bold uppercase text-2xl" value="Crear Cuenta">


            </form>


        </div>




    </div>
@endsection
