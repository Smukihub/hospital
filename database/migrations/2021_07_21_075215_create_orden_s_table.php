<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdenSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orden_s', function (Blueprint $table) {
            $table->id();
             $table->foreignId('equipo_id')
            ->references('id')
            ->on('equipos');
            $table->foreignId('marca_id')
            ->references('id')
            ->on('equipos');
            $table->foreignId('modelo_id')
            ->references('id')
            ->on('equipos');
            $table->foreignId('noserie_id')
            ->references('id')
            ->on('equipos');
            $table->foreignId('noinventario_id')
            ->references('id')
            ->on('equipos');
            $table->foreignId('area_id')
            ->references('id')
            ->on('equipos');
            $table->string('nombre');
            $table->string('falla');
            
            $table->enum('tipo', ['Correctivo', 'Preventivo','Capacitación','Instalación','Asistencia','Supervisión']);
            $table->string('descripcion');
            $table->string('refacciones');
            $table->string('observaciones');
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
        Schema::dropIfExists('orden_s');
    }
}
