<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePais extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /* Schema::create('Pais', function (Blueprint $table) { */
        /*     $table->id(); */
        /*     $table->char('PaisCodigo', 3); */
        /*     $table->char('PaisNombre', 52); */
        /*     $table->string('PaisContinente', 50)->default('Asia'); */
        /*     $table->string('PaisRegion', 26)->nullable; */
        /*     $table->float('PaisArea')->default(0.00); */
        /*     $table->smallInteger('PaisIndependencia')->nullable(); */
        /*     $table->integer('PaisPoblacion')->default(0); */
        /*     $table->float('PaisExpectativaDeVida')->nullable(); */
        /*     $table->float('PaisProductoInternoBruto')->nullable(); */
        /*     $table->float('PaisProductoInternoBrutoAntiguo')->nullable(); */
        /*     $table->string('PaisNombreLocal', 45)->nullable(); */
        /*     $table->string('PaisGobierno', 52)->nullable(); */
        /*     $table->string('PaisJefeDeEstado', 60)->nullable(); */
        /*     $table->integer('PaisCapital')->nullable(); */
        /*     $table->char('PaisCodigo2', 2)->nullable(); */

        /*     $table->timestamps(); */
        /* }); */

        /* Schema::create('Ciudad', function (Blueprint $table) { */
        /*     $table->id(); */
        /*     $table->integer('CiudadID')->nullable(); */
        /*     $table->char('CiudadNombre', 35)->nullable(); */
        /*     $table->char('PaisCodigo', 3)->nullable(); */
        /*     $table->char('CiudadDistrito', 20)->nullable(); */
        /*     $table->integer('CiudadPoblacion')->default(0); */

        /*     $table->timestamps(); */
        /* }); */
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        /* Schema::dropIfExists('Pais'); */
        /* Schema::dropIfExists('Ciudad'); */
    }
}
