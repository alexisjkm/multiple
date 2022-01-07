<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ExamenSolicitud;

class ExamenSolicitudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $nombrePregunta = $request->input('nombrePregunta');
        $cantidad = $request->input('pregunta');

        $pregunta = ExamenSolicitud::create([
            'nombre_examen'=>$nombrePregunta,
            'cantidad'=>$cantidad,
        ]);

        $id = $pregunta->id;

        return response()->json(['id' => $id], 201);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //

        $preguntas = ExamenSolicitud::where('id', $id)
        ->get();

        $cantidad = 0;
        foreach($preguntas as $pregunta){
            $cantidad = $pregunta->cantidad;
        }

        return response()->json([
            'cantidad'=>$cantidad
        ], 201);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
