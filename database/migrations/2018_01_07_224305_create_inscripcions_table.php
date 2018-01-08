<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInscripcionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inscripcions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('usuario_id')->unsigned();
            $table->foreign('usuario_id')->references('id')->on('usuarios');
            $table->integer('semestre_academico_id')->unsigned();
            $table->foreign('semestre_academico_id')->references('id')->on('semestre__academicos');
            $table->integer('modalidad_academica_id')->unsigned();
            $table->foreign('modalidad_academica_id')->references('id')->on('modalidad__academicas');
            $table->integer('carrera_id')->unsigned();
            $table->foreign('carrera_id')->references('id')->on('carreras');
            $table->integer('turno_id')->unsigned();
            $table->foreign('turno_id')->references('id')->on('turnos');
            $table->date('fecha_inscripcion');
            $table->string('hora_inicio');
            $table->string('hora_termino');
            $table->string('dias');
            $table->decimal('monto_total',5,2);
            $table->string('observacion');
            $table->boolean('estadosistema')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inscripcions');
    }
}
