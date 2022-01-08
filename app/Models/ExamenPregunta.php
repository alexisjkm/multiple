<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExamenPregunta extends Model
{
    use HasFactory;

    
    protected $fillable = ['id_examen_solicitud', 'pregunta'];
    protected $table = 'examanes_preguntas';
    
}
