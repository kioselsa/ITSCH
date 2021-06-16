<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMateriasEspecialidadTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materias_especialidad', function (Blueprint $table) {
            $table->id();
            $table->string('clave',30);
            $table->string('nombre',50);
            $table->string('nom_archivo',100);
            $table->bigInteger('id_especialidad')->unsigned()->nullable();
            $table->foreign('id_especialidad')->references('id')->on('especialidades')->onDelete('cascade');
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
        Schema::dropIfExists('materias_especialidad');
    }
}