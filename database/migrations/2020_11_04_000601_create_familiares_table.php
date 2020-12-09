<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFamiliaresTable extends Migration
{
    /**
     * Run the migrations. ! Familiares
     *
     * @return void
     */
    public function up()
    {
        Schema::create('familiares', function (Blueprint $table) {
            $table->id('id');
            $table->string('apellido',45);
            $table->string('nombres',45);
            $table->date('fechaNacimiento');
                        
            $table->timestamps();

            $table->foreignId('idUsuario')->references('id')->on('users')->onDelete('cascade');
            $table->foreignId('idParentesco')->references('id')->on('parentescos');
            $table->foreignId('idGenero')->references('id')->on('generos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('familiares');
    }
}
