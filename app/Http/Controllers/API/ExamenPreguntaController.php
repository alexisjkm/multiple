<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ExamenPregunta;
use App\Models\ExamenRespuesta;

class ExamenPreguntaController extends Controller
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
        $id = $request->input('id');
        $preguntas = ($request->input('preguntas'));
        // dd($preguntas);
        \DB::beginTransaction();
        try {
            foreach ($preguntas as $pregunta) {
                // dd($pregunta);
                $namePregunta = $pregunta['pregunta'];
                $respuestas = $pregunta['respuesta'];
    
                $examenPregunta = ExamenPregunta::create([
                    'id_examen_solicitud'=>$id,
                    'pregunta'=>$namePregunta,
                ]);
    
                $idExamenPregunta = $examenPregunta->id;
                // dd($idExamenPregunta);
    
                foreach ($respuestas as $respuesta) {
                    $correcta = ($respuesta['correcta']);
                    // dd($correcta);
                    $nameRespuesta = $respuesta['respuesta'];

                    ExamenRespuesta::create([
                        'correcta'=>($correcta), 
                        'respuesta'=>$nameRespuesta,
                        'id_pregunta'=>$idExamenPregunta,
                    ]);
                }
                // echo $namePregunta;
            }
        } catch (\Excepction $e) {
            \DB::rollback();
            dd($e->getMessage());
        }


        \DB::commit();
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
