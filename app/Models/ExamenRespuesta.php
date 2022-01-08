<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExamenRespuesta extends Model
{
    use HasFactory;
    protected $fillable = ['id_pregunta', 'correcta', 'respuesta'];
    protected $table = 'examanes_respuestas';
    protected $casts = ['correcta' => 'boolean'];
    
}
