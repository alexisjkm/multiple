<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExamanesRespuestas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('examanes_respuestas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_pregunta');
            $table->string("respuesta");
            $table->boolean("correcta")->default(0);
            $table->timestamps();
        });

        Schema::table('examanes_respuestas', function(Blueprint $table) {
            $table->foreign('id_pregunta')->references('id')->on('examanes_preguntas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('examanes_respuestas');
    }
}
