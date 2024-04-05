<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
use Intervention\Image\Drivers\Imagick\Driver;
class ImagenController extends Controller
{
    //

    public function store(Request $request){

        $imagen = $request->file('file');

        $name_image = Str::uuid()."." . $imagen->extension();


         $imagen_serve = Image::make($imagen);

         $imagen_serve->fit(1000,1000);
         $imagen_path = public_path('uploads').'/'.$name_image;

         $imagen_serve->save(($imagen_path));

        return  response()->json(['imagen'=>$name_image]);

    }

}
