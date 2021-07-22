<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEquiposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('marca');
            $table->string('modelo');
            $table->string('noserie');
            $table->string('noinventario');
            $table->date('fechaini');
            $table->date('fechafin');
            $table->timestamps();
            $table->enum('periodo',['1','3','6']);
            $table->enum('area', ['Urgencias', 'Quirofano','Laboratorio','Rayos X','Neonatos','Hospitalización','Ginecología','Sala de shock','Obervación adultos']);
            $table->enum('prioridad', ['Baja', 'Media','Alta']);
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('equipos');
    }
}
