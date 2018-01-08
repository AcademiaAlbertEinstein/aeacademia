<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSemestreAcademicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('semestre__academicos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('semestre_academico');
            $table->date('fecha_inicio');
            $table->date('fecha_termino');
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
        Schema::dropIfExists('semestre__academicos');
    }
}
