<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExamenSolicitud extends Model
{
    use HasFactory;
    protected $fillable = ['nombre_examen', 'cantidad'];
    protected $table = 'examenes_solicitudes';
    
}
