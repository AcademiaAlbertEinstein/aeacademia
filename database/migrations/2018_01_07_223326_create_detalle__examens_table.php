<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetalleExamensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle__examens', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('semestre_academico_id')->unsigned();
            $table->foreign('semestre_academico_id')->references('id')->on('semestre__academicos');
            $table->integer('usuario_id')->unsigned();
            $table->foreign('usuario_id')->references('id')->on('usuarios');
            $table->integer('examen_id')->unsigned();
            $table->foreign('examen_id')->references('id')->on('examens');
            $table->decimal('punto',5,2);
            $table->decimal('porcentaje',5,2);
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
        Schema::dropIfExists('detalle__examens');
    }
}
