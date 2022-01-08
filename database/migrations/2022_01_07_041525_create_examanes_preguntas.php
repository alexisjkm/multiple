<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExamanesPreguntas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('examanes_preguntas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_examen_solicitud');
            $table->string('pregunta')->default(0);
            $table->timestamps();
        });
        
        Schema::table('examanes_preguntas', function(Blueprint $table) {
            $table->foreign('id_examen_solicitud')->references('id')->on('examenes_solicitudes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('examanes_preguntas');
    }
}
