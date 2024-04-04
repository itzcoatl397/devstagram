<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Devstegram</title>


        <!-- Styles --> @vite('resources/css/app.css')
        <style>

        </style>
    </head>
    <body class="bg-gray-100">
        <header class="p-5 border-b bg-white shadow">

            <div class="container mx-auto flex justify-between items-center">
             <h1 class="font-black text-3xl"> Devstegram</h1>
            <nav class="flex gap-4 items-center" >
                <a href="" class="font-bold text-gray-600 uppercase text-sm ">Login</a>
                <a href="{{ route('register') }}" class="font-bold text-gray-600 uppercase text-sm ">Crear Cuenta</a>

            </nav>

         </div>
        </header>

        <main class="container mt-10 mx-auto">
            <h2 class="font-black text-center  text-3xl mb-10">
                @yield('titulo')
            </h2>
            @yield('contenido')

        </main>

        <footer class=" mt-10 text-center  text-gray-500 uppercase  font-bold">
           Devstegram todos los derechos reservados {{now()->year}}
        </footer>

    </body>
</html>
