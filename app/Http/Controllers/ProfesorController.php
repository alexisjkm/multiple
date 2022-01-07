<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class ProfesorController extends Controller
{
    //

    function crearPreguntas(Request $request, $id){
        
        return view('profesor.preguntas', [
            'id'=>$id,
        ]);
    }
}
